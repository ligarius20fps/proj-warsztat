<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\City;
use App\Models\Address;
use App\Models\Customer;
use App\Models\Visit;
use App\Models\Service_Type;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Auth;

class PagesController extends Controller
{
    public function workshop_page(int $id)
    {
        $service_types= Service_Type::all();
        $workshop=Workshops::find($id);
        $reviews=Review::rightJoin('visits','visits.id','=','reviews.visit_id')->
                where('visits.workshop_id',$id)
                ->get();
        return view('workshop_page', ['workshop'=>$workshop,'service_types'=>$service_types,'reviews'=>$reviews]);
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
        return redirect('/account/workshops');
    }
    public function my_workshops()
    {
        $q=Auth::user()->id;
        $workshops = DB::select("select * from workshops where user_id=$q")/*Workshops::where('user_id', '=', $q)*/;
        return view('workshops', ['workshops'=>$workshops]);
    }
    public function new_customer()
    {
        $cities=City::all();
        return view('new_customer', ['cities'=>$cities]);
    }
    public function add_customer(Request $request)
    {
        $user=Auth::user();
        if( $user==NULL || $user->customer==NULL)
        {
        $request->validate([
            'street_name'=>'required',
            'postal_code'=>'required',
            'building_number'=>'required',
        ]);
        if($user==NULL)
        {
            $request->validate([
            'email'=>'required',
        ]);
        }
        $address = new Address;
        $customer = new Customer;
        }
        else
        {
            $customer=$user->customer;
            $address=$customer->address;
        }
        if($request->city_id!=NULL)
        {
            $address->city_id=$request->city_id;
        }
        if($request->street_name!="")
        {
            $address->street_name=$request->street_name;
        }
        if($request->postal_code!="")
        {
            $address->postal_code=$request->postal_code;
        }
        if($request->building_number!="")
        {
            $address->building_number=$request->building_number;
        }
        $address->save();
        if($request->first_name!="")
        {
            $customer->first_name=$request->first_name;
        }
        if($request->last_name!="")
        {
            $customer->last_name=$request->last_name;
        }
        if($request->name != '')
        {
            $customer->name=$request->name;
        }
        else {
            $customer->name=$request->first_name.' '.$request->last_name;
        }
        if($request->phone_number!="")
        {
            $customer->phone_number=$request->phone_number;
        }
        if($user!=NULL && $user->email!="")
        {
            $customer->email=$user->email;
        }
        else
        {
            $customer->email=$request->email;
        }
        $customer->address_id=$address->id;
        $customer->is_registered=1;
        $customer->save();
        if($user!=NULL)
        {
            $user->customer_id=$customer->id;
            $user->save();
            return redirect('/account');
        }
        else
        {
            $id=$request->route('id');
            return redirect("/workshop/$id/appoint/$customer->id");
        }
    }
    public function update_customer()
    {
        $cities=City::all();
        $customer=Customer::find(Auth::user()->customer_id);
        return view('new_customer', ['cities'=>$cities, 'customer'=>$customer]);
    }
    public function workshop_visits(int $id)
    {
        $visits=Visit::where('workshop_id',$id)->get();
        return view('visits', ['visits'=>$visits]);
    }
    
    public function customer_visits()
    {
        $customerid=Auth::user()->customer->id;
        $visits=Visit::where('customer_id',$customerid)->orderBy('status', 'asc')->get();
        return view('visits', ['visits'=>$visits]);
    }


    //niech sprawdzi czy customer istnieje
    //if($user->customer==NULL) ...
    //else //uzupelniamy formularz automatycznie
}
