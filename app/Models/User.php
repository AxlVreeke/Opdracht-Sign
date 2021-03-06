<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function exercise()
    {
        return $this->HasMany(Exercise::class);
        $exercises = auth()->user()->exercises()->orderBy('created_at', 'desc')->paginate(6);
    }

    public function participations() {
        return $this->hasMany(Participate::class);
    }

    public function giveexercises() {
        return $this->hasMany(Giveexercises::class);
    }

    public function assignedToExercise($exercise_id) {
        $participation = Participate::where('user_id', auth()->user()->id)->where('exercise_id', $exercise_id)->first();
        if ($participation) {
            return true;
        }
        return false;
    }
}
