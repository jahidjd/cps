<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    use HasFactory;
    protected $table = 'service_details';
    protected $fillable =[
        'service_id',
        'service_details',
        'details_quote_one',
        'details_quote_two',
        'service_values',
        'about_the_service',
        'advantage_of_the_service',
        'more_details',
        
    ];
    function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
