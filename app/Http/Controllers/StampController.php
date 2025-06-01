<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stamp;

class StampController extends Controller
{
    public function index()
    {
        $stamps = Stamp::with('user', 'lovedByUsers')->get();

        return response()->json($stamps);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'story' => 'required|string|max:255',
            'tag' => 'nullable|string|max:100',
        ]);

        Stamp::create([
            'title' => $request->title,
            'story' => $request->story,
            'tag' => $request->tag,
            'user_id' => auth()->check() ? auth()->id() : null,
        ]);

        return response()->json(['message' => 'Stamp created successfully']);
    }

    public function explore()
    {
        $stamps = Stamp::with('user')->latest()->get(); // ambil data stamp + relasi user
        return view('explore', compact('stamps')); // pastikan 'explore.blade.php' ada
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
            return response()->json(['message' => 'Unliked']);
        } else {
            $stamp->lovedByUsers()->attach($user->id);
            return response()->json(['message' => 'Liked']);
        }
    }
}
