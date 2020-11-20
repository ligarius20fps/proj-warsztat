<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshops extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone_number',
        'description',
        'email'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }
    
    public function workshop_type()
    {
        return $this->belongsTo('App\Models\Workshop_Types');
    }
    
    public function visit()
    {
        return $this->hasMany('App\Models\Visit');
    }
    public function price_list()
    {
        return $this->hasOne('App\Models\Price_List');
    }
}
