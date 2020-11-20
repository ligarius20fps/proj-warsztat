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
use App\Models\Price_List;
use App\Models\Price;
use Illuminate\Support\Facades\DB;
use Auth;

class PagesController extends Controller
{
    public function workshop_page(int $id)
    {
        $workshop=Workshops::find($id);
        $reviews=Review::join('visits','visits.id','=','reviews.visit_id')->
                where('visits.workshop_id',$id)
                ->get();
        $price_list=Price_List::where('workshop_id',$id)->first();
        if($price_list!=null)
        {
        $prices=Price::where('price_list_id',$price_list->id)->get();
        $service_types= Service_Type::where('price.price_list_id',$price_list->id)->join('prices', 'service_type.id','=','prices.service_type_id');
        }
        else
        {
            $prices=null;
            $service_types= Service_Type::all();
        }    
        return view('workshop_page', ['workshop'=>$workshop,'service_types'=>$service_types,'reviews'=>$reviews,'prices'=>$prices]);
    }
    public function new_workshop()
    {
        $cities=City::all()->sortBy('name');
        $workshop_types=DB::select("select * from workshop_types");
        return view('new_workshop', ['cities'=>$cities, 'workshop_types'=>$workshop_types]);
    }
    public function update_workshop(int $id)
    {
        $cities=City::all()->sortBy('name');
        $workshop_types=DB::select("select * from workshop_types");
        $workshop= Workshops::find($id);
        if(Price_List::where('workshop_id',$id)->get()->count()!=0)
        {
            $hasPriceList=1;
        }
        else
        {
            $hasPriceList=0;
        }
        return view('new_workshop', ['cities'=>$cities, 'workshop_types'=>$workshop_types, 'workshop'=>$workshop, 'hasPriceList'=>$hasPriceList]);
    }
    public function add_workshop(Request $request)
    {
        $id=$request->workshop_id;
        if($id==null)
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
        }
        else
        {
            $workshop = Workshops::find($id);
            $address= Address::find($workshop->address_id);
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
        if($request->name!="")
        {
        $workshop->name=$request->name;
        }
        if($request->workshop_type_id!=NULL)
        {
        $workshop->workshop_type_id=$request->workshop_type_id;
        }
        if($request->phone_number!="")
        {
        $workshop->phone_number=$request->phone_number;
        }
        if($request->email!="")
        {
        $workshop->email=$request->email;
        }
        if($request->description!="")
        {
        $workshop->description=$request->description;
        }
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
    public function create_price_list(int $id)
    {
        $price_list=new Price_List;
        $price_list->workshop_id=$id;
        $price_list->save();
        return redirect()->back();
    }
    public function price_list(int $id)
    {
        $workshop= Workshops::find($id);
        $price_list=Price_List::where('workshop_id',$id)->first();
        $service_types= Service_Type::all();
        $prices=Price::where('price_list_id',$price_list->id)->get();
        return view('price_list',['workshop'=>$workshop,'price_list'=>$price_list,'prices'=>$prices,'service_types'=>$service_types]);
    }
    public function new_price(int $id, Request $request)
    {
        $price=new Price;
        $price_list=Price_List::where("workshop_id",$id)->first();
        $request->validate([
            'service_type'=>'required',
            'price'=>'required',
        ]);
        $price->service_type_id=$request->service_type;
        $price->price=$request->price;
        $price->price_list_id=$price_list->id;
        if($request->has('agreeable'))
        {
            $price->agreeable=1;
        }
        else
        {
            $price->agreeable=0;
        }
        $price->save();
        return redirect()->back();
    }
    public function remove_price(int $id)
    {
        $price= Price::find($id);
        $price->delete();
        return redirect()->back();
    }
    public function notifications()
    {
        return view ('notifications');
    }
    //niech sprawdzi czy customer istnieje
    //if($user->customer==NULL) ...
    //else //uzupelniamy formularz automatycznie
}
