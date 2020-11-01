<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
    
    public function workshop()
    {
        return $this->belongsTo('App\Models\Workshops');
    }
    
    public function visit_service_type()
    {
        return $this->hasMany('App\Models\Visit_Service_Type');
    }
    
    public function review()
    {
        return $this->hasMany('App\Models\Review');
    }
}
