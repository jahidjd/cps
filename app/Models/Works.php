<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    use HasFactory;
    protected $table = 'works';
    protected $fillable = ['title','image','status','service_id '];
    function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
