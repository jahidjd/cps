<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    use HasFactory;
    protected $table = 'price_lists';
    protected $fillable =[
        'service_id',
        'title',
        'simple',
        'complex',
        'advance',
        'super_complex',
    ];
    function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
