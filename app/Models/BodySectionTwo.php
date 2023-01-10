<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodySectionTwo extends Model
{
    use HasFactory;
    protected $table = 'body_section_twos';
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];
}
