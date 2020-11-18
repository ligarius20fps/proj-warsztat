<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price_List extends Model
{
    use HasFactory;
    protected $table='price_lists';
    
    public function price()
    {
        return $this->hasMany('App\Models\Price');
    }
    public function workshop()
    {
        return $this->belongsTo('App\Models\Workshops');
    }
}
