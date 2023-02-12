<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];

    function servideDetails(){
        return $this->hasMany(ServiceDetails::class,'id','service_id');
    }
    function priceList(){
        return $this->hasMany(PriceList::class,'id','service_id');
    }
    function serviceImage(){
        return $this->hasMany(ServiceImage::class,'id','service_id');
    }
    function works(){
        return $this->hasMany(Works::class,'id','service_id');
    }
}
