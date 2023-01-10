<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    use HasFactory;
    protected $table = 'user_messages';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image_one',
        'image_two',
        'image_three',
        'status',
    ];
}
