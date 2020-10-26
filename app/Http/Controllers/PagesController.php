<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\City;
use App\Models\Address;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function workshop_page(Workshops $workshop)
    {
        return view('workshop_page')->with('workshop',$workshop);
    }
    public function new_workshop()
    {
        $cities=City::all();
        $workshop_types=DB::select("select * from workshop_types");
        return view('new_workshop', ['cities'=>$cities, 'workshop_types'=>$workshop_types]);
    }
    public function add_workshop(Request $request)
    {
        Workshops::create($request->all());
        Address::create($request->all());
        return redirect('/account/workshops');
    }
}
