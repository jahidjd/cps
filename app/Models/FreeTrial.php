<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeTrial extends Model
{
    use HasFactory;
    protected $table = 'free_trials';
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
