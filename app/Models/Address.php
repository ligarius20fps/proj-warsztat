<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=[
        'street_name',
        'building_number',
        'postal_code'
    ];
    use HasFactory;
}
