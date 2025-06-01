<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender',
        'title',
        'story',
        'color',
        'tag',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lovedByUsers()
    {
        return $this->belongsToMany(User::class, 'loves')->withTimestamps();
    }
}
