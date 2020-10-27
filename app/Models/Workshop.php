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
     
    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }
    
    public function workshop_type()
    {
        return $this->HasOne('App\Models\Workshop_Types');
    }
    
    public function visit()
    {
        return $this->hasMany('App\Models\Visit');
    }
}
