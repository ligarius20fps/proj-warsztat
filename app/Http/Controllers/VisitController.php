<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\Visit;
use App\Models\Customer;
use App\Models\Review;
use App\Notifications\NewVisit;
use Auth;

class VisitController extends Controller
{
    public function new_visit(int $id, int $customer_id)
    {
        $workshop= Workshops::find($id);
        if(Auth::user()!=NULL && Auth::user()->user_type==1)//jesli uzytkownik jest zwykly
        {
            if(Auth::user()->customer!=NULL)// ma klienta
            {
                $visit=new Visit;
                $visit->status=0;
                $visit->customer_id=Auth::user()->customer->id;
                $visit->workshop_id=$id;
                $visit->date=date("Y-m-d");
                $visit->save();
                $workshop->user->notify(new NewVisit($visit->customer, $workshop, $visit));
                return redirect("workshop/$workshop->id");
            }
            else//a jesli nie
            {
                //$message="Nie istnieje klient dla danego konta, proszę utworzyć";
                return redirect("account/customer/new");
            }
        }
        if(Auth::user()==NULL)
        {
                $visit=new Visit;
                $visit->status=0;
                $visit->customer_id=$customer_id;
                $visit->workshop_id=$id;
                $visit->date=date("Y-m-d");
                $visit->save();
                $workshop->user->notify(new NewVisit($visit->customer, $workshop, $visit));
                return redirect("workshop/$workshop->id");
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
    public function new_review(int $id)
    {
        $visit=Visit::find($id);
        return view('review', compact('visit'));
    }
    public function add_review(int $id, Request $request)
    {
        $visit=Visit::find($id);
        $workshop=Workshops::find($visit->workshop_id);
        $request->validate([
            'description'=>'required|min:15|max:250',
            'rating'=>'required'
        ]);
        $review=new Review;
        $review->description=$request->description;
        $review->rating=$request->rating;
        $review->user_id=Auth::user()->id;
        $review->visit_id=$id;
        $review->save();
        $average=0;//podzapytanie żeby policzyć średnią
        //wtedy można poprostu zrobić update
        $workshop->rating=DB::table('reviews')->where('visits.workshop_id', $workshop->id)->join('visits', 'reviews.visit_id','=', 'visits.id')->avg('rating');
        $workshop->save();
        return redirect("/workshop/$workshop->id");
        //zaktualizować średnią dla warsztatu
    }
    public function reject_visit(int $id)
    {
        $visit= Visit::find($id);
        $workshop=$visit->workshop;
        $visit->delete();
        return redirect("/workshop/$workshop->id/visits");
    }
    public function accept_visit(int $id)
    {
        $visit= Visit::find($id);
        $visit->status=1;
        $visit->save();
        return redirect()->back();
    }
    public function notification_clicked(String $notif_id, int $visit_id)
    {
        $notification=Auth::user()->unreadNotifications->where('id',$notif_id)->first();
        $notification->markAsRead();
        switch($notification->type)
        {
            case 'App\Notifications\NewVisit':
                return redirect("/visit/$visit_id");
                break;
        }
    }
}
