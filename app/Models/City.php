<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'name'
    ];
    
    public function voivodeship()
    {
        return $this->belongsTo('App\Models\Voivodeship');
    }
    
    public function address()
    {
        return $this->hasMany('App\Models\Address');
    }
}
