<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Giveexercises extends Model
{
    use HasFactory;

    protected $table = 'giveexercises';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exercise() {
        return $this->belongsTo(Exercise::class);
    }

    public function exercise_id() {
        return $this->belongsTo(Giveexercises::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }

    protected static function booted()
    {
        static::creating(function ($giveexercise) {
            $giveexercise->user_id = Auth::id();
        });
    }
}
