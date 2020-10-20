<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price_List extends Model
{
    protected $fillable=[
        'start_date',
        'end_date'
    ];
    use HasFactory;
}
