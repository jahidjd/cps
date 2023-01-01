<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;
    protected $table = 'generals';
    protected $fillable =[
        'logo',
        'footer_text',
        'email',
        'phone',
        'address',
        'map',
        'contact_text',
        'pricing_text',
        'portfolio_text',
        'service_text',
        'copyright_text',
        'card_image',
        'free_trl_text',
        'home_button_text',
        'bennar_text_small',
        'bennar_text',
        
    ];
}
