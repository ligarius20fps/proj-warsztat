<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'street_name',
        'building_number',
        'postal_code'
    ];
    
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
    
    public function customer()
    {
        return $this->hasMany('App\Models\Customer');
    }
    
    public function workshop()
    {
        return $this->hasMany('App\Models\Workshop');
    }
}
