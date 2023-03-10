<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePricing extends Model
{
    use HasFactory;
    protected $table = 'home_pricings';
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];
}
 