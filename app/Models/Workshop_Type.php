<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop_Types extends Model
{
    use HasFactory;
    protected $table = 'workshop_types';
    protected $fillable=[
        'name'
    ];
    
    public function workshop()
    {
        return $this->hasMany('App\Models\Workshop');
    }
}