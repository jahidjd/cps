<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddService extends Model
{
    use HasFactory;
    protected $table = 'add_services';
    protected $fillable = [
        
        'pricing_id',
        'name',
        'phone',
        'email',
        'address',
        'sub_total',
        'grand_total',
        'status',
        'comments',
        'service_name',
    ];
}
