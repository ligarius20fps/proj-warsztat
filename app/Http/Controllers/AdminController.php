<?php

namespace App\Http\Controllers;
use App\Models\Workshops;
use App\Models\City;
use App\Models\Workshop_Types;
use App\Models\Service_Type;
use App\Models\Voivodeship;
use App\Notifications\WorkshopRejected;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function remove_workshop(int $id, Request $request)
    {
        $request->validate(['reason'=>'required',]);
        $reason=$request->reason;
        $workshop=Workshops::find($id);
        $workshop->user->notify(new WorkshopRejected($workshop, $reason));
        $workshop->delete();
        return redirect('/');
    }
    public function notification_clicked(String $notif_id, int $workshop_id)
    {
        $notification=Auth::user()->unreadNotifications->where('id',$notif_id)->first();
        $notification->markAsRead();
        return redirect("/workshop/$workshop_id");
    }
    public function db_edit()
    {
        return view('db_edit');
    }
    public function db_edit_table(int $num)
    {
        if($num==1)
        {
            $voivodeships= Voivodeship::all();
            return view('db_edit', ['voivodeships'=>$voivodeships])->with('table',$num);
        }
        return view('db_edit')->with('table',$num);
    }
    public function add_city(Request $request)
    {
        $request->validate(['name'=>'required', 'voivodeship'=>'required']);
        $city=new City;
        $city->voivodeship_id=$request->voivodeship;
        $city->name=$request->name;
        $city->save();
        return redirect()->back();
    }
    public function add_workshop_type(Request $request)
    {
        $request->validate(['name'=>'required']);
        $workshop_type=new Workshop_Types;
        $workshop_type->name=$request->name;
        $workshop_type->save();
        return redirect()->back();
    }
    public function add_service_type(Request $request)
    {
        $request->validate(['name'=>'required']);
        $service_type=new Service_Type;
        $service_type_type->name=$request->name;
        $service_type->save();
        return redirect()->back();
    }
}
