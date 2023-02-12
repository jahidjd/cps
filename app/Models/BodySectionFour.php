<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodySectionFour extends Model
{
    use HasFactory;
    protected $table = 'body_section_fours';
    protected $fillable = ['title','description'];
}
