<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop_Types extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'name'
    ];
    
    public function workshop()
    {
        return $this->belongsTo('App\Models\Workshop');
    }
}