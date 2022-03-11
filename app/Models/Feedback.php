<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'feedback',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<timestamp, timestamps>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
