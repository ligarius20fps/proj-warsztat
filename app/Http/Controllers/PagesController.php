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
    public function add_workshop(/*Request $request*/)
    {
         Address::create([
            'street_name'=>request('street_name'),
            'postal_code'=>request('postal_code'),
            'building_number'=>request('building_number'),
            'city_id'=>request('city_id')
        ]);
        Workshops::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'workshop_type_id'=>request('workshop_type_id'),
            'description'=>request('description'),
            'address_id'=>DB::getPdo()->lastInsertedId()]);
        return redirect('/account/workshops');
    }
}
