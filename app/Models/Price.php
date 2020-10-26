<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'price'
    ];
    
    public function service_type()
    {
        return $this->belongsTo('App\Models\Service_type');
    }
    
    public function price_list()
    {
        return $this->belongsTo('App\Models\Price_List');
    }
}