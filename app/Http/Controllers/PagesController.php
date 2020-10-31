<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\City;
use App\Models\Address;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Auth;

class PagesController extends Controller
{
    public function workshop_page(int $id)
    {
        $workshops=DB::select("select * from workshops where id=$id");
        return view('workshop_page', ['workshops'=>$workshops]);
    }
    public function new_workshop()
    {
        $cities=City::all();
        $workshop_types=DB::select("select * from workshop_types");
        return view('new_workshop', ['cities'=>$cities, 'workshop_types'=>$workshop_types]);
    }
    public function add_workshop(Request $request)
    {
        $request->validate([
            'street_name'=>'required',
            'postal_code'=>'required',
            'building_number'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'workshop_type_id'=>'required',
        ]);
        $address = new Address;
        $workshop = new Workshops;
        $address->city_id=$request->city_id;
        $address->street_name=$request->street_name;
        $address->postal_code=$request->postal_code;
        $address->building_number=$request->building_number;
        $address->save();
        $workshop->name=$request->name;
        $workshop->workshop_type_id=$request->workshop_type_id;
        $workshop->phone_number=$request->phone_number;
        $workshop->email=$request->email;
        $workshop->description=$request->description;
        $workshop->address_id=$address->id;
        $workshop->user_id=Auth::user()->id;
        $workshop->save();
         /*Address::create([//$request->all()
            'city_id'=>$request['city_id'],
            'street_name'=>$request['street_name'],
            'postal_code'=>$request['postal_code'],
            'building_number'=>$request['building_number'],
        ]);
        Workshops::create([//$request->all()/*
            'name'=>$request['name'],
            'workshop_type_id'=>$request['workshop_type_id'],
            'phone_number'=>$request['phone_number'],
            'email'=>$request['email'],
            'description'=>$request['description'],
            'address_id'=>DB::getPdo()->lastInsertedId()]);*/
        return redirect('/account/workshops');
    }
    public function my_workshops()
    {
        $q=Auth::user()->id;
        $workshops = Workshops::where('user_id', 'LIKE', '%' .$q. '%');
        return view('workshops', compact('workshops'));
    }
    public function new_customer()
    {
        $cities=City::all();
        return view('customer', ['cities'=>$cities]);
    }
    public function add_customer(Request $request)
    {
        $user=Auth::user();
        $request->validate([
            'street_name'=>'required',
            'postal_code'=>'required',
            'building_number'=>'required',
        ]);
        $address = new Address;
        $customer = new Customer;
        $address->city_id=$request->city_id;
        $address->street_name=$request->street_name;
        $address->postal_code=$request->postal_code;
        $address->building_number=$request->building_number;
        $address->save();
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        if($request->name != '')
        {
            $customer->name=$request->name;
        }
        else {
            $customer->name=$request->first_name.''.$request->last_name;
        }
        $customer->phone_number=$request->phone_number;
        $customer->email=$user->email;
        $customer->address_id=$address->id;
        $customer->is_registered=1;
        $customer->save();
        $user->customer_id=$customer->id;
        $user->save();
        return redirect('/account');
    }
}
