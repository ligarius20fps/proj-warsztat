<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshops;

class PagesController extends Controller
{
    public function workshop_page(Workshops $workshop)
    {
        return view('workshop_page')->with('workshop',$workshop);
    }
}
