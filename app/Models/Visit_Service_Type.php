<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit_Service_Type extends Model
{
    use HasFactory;
    
    public function visit()
    {
        return $this->belongsTo('App\Models\Visit');
    }
    
    public function service_type()
    {
        return $this->belongsTo('App\Models\Service_type');
    }
}
