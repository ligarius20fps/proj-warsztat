<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Type extends Model
{
    use HasFactory;
    protected $table='service_types';
    protected $fillable=[
        'name'
    ];
    
    public function visit_service_type()
    {
        return $this->hasMany('App\Models\Visit_service_type');
    }
    
    public function price()
    {
        return $this->hasOne('App\Models\Price');
    }
}