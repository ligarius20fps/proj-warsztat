<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
        'name',
        'first_name',
        'last_name',
        'email',
        'phone_number'
    ];
    use HasFactory;
}
