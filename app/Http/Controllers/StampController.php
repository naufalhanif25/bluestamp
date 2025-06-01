<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stamp;

class StampController extends Controller
{
    public function index()
    {
        $stamps = Stamp::with('user', 'lovedByUsers')->get();

        return redirect("/share");
    }

    public function store(Request $request)
    {
        $request->validate([
            'sender' => 'required|string|max:64',
            'title' => 'required|string|max:255',
            'story' => 'required|string|max:255',
            'color' => 'required|string|max:64',
            'tag' => 'required|string|max:100',
        ]);

        Stamp::create([
            'sender' => $request->sender,
            'title' => $request->title,
            'story' => $request->story,
            'color' => $request->color,
            'tag' => $request->tag,
            'user_id' => auth()->check() ? auth()->id() : null,
        ]);

        return redirect("/explore");
    }

    public function explore(Request $request)
    {
        $keyword = $request->keyword;
        $stampsQuery = Stamp::with('user');

        if ($keyword) {
            $stampsQuery->where(function($q) use ($keyword) {
                $q->where('tag', 'like', '%' . $keyword . '%')
                  ->orWhere('title', 'like', '%' . $keyword . '%');
            })->latest();

        }
        else {
            $stampsQuery->latest();
        }

        $stamps = $stampsQuery->latest()->get();

        return view('explore', compact('stamps'));
    }

    public function toggleLove($id)
    {
        $user = auth()->user();
        
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $stamp = Stamp::findOrFail($id);

        if ($stamp->lovedByUsers()->where('user_id', $user->id)->exists()) {
            $stamp->lovedByUsers()->detach($user->id);

            return redirect("/explore");
        } else {
            $stamp->lovedByUsers()->attach($user->id);

            return redirect("/explore");
        }
    }
}
