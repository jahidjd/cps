<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodySectionThree extends Model
{
    use HasFactory;
    protected $table = 'body_section_threes';
    protected $fillable = ['title','description','status'];
}
