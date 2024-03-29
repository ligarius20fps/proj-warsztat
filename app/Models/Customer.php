<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'name',
        'first_name',
        'last_name',
        'email',
        'phone_number'
    ];
    
    public function visit()
    {
        return $this->hasMany('App\Models\Visit');
    }
    
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
    
    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }
}
