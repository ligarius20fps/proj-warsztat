<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\Visit;
use Auth;

class VisitController extends Controller
{
    public function button_clicked(int $id)
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
                
            }
        }
    }
}
