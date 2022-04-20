<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Participate extends Model
{
    use HasFactory;

    protected $table = 'participates';
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
