<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodySectionOne extends Model
{
    use HasFactory;
    protected $table = 'body_section_ones';
    protected $fillable = [
        'title',
        'description',
        'status',
    ];
}
