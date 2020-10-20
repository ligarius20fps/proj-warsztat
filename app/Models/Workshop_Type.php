<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop_Types extends Model
{
    protected $fillable=[
        'name'
    ];
    use HasFactory;
}