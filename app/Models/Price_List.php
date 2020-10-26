<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price_List extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'start_date',
        'end_date'
    ];
    
    public function price()
    {
        return $this->hasMany('App\Models\Price');
    }
}
