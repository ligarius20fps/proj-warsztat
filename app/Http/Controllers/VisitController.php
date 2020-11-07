<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\Visit;
use Auth;

class VisitController extends Controller
{
    public function new_visit(int $id)
    {
        $workshop= Workshops::find($id);
        if(Auth::user()->user_type==1)//jesli uzytkownik jest zwykly
        {
            if(Auth::user()->customer!=NULL)// ma klienta
            {
                $visit=new Visit;
                $visit->status=0;
                $visit->customer_id=Auth::user()->customer->id;
                $visit->workshop_id=$id;
                $visit->date=date("Y-m-d");
                $visit->save();
                return redirect("workshop/$workshop->id");
            }
            else//a jesli nie
            {
                //$message="Nie istnieje klient dla danego konta, proszę utworzyć";
                return redirect("account/customer/new");
            }
        }
    }
    public function visit_page(int $id)
    {
        $visit= Visit::find($id);
        return view('visit_page', compact('visit'));
    }
    public function update_visit(int $id, Request $request)
    {
        $visit=Visit::find($id);
        if($request->date!=NULL)
        {
            $visit->date=$request->date;
        }
        $visit->status=$request->status;
        $visit->save();
        return redirect()->back();
    }
}
