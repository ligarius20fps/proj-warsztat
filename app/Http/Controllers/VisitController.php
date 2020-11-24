<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\Visit;
use App\Models\Visit_Service_Type;
use App\Models\Service_Type;
use App\Models\Customer;
use App\Models\Review;
use App\Notifications\NewVisit;
use App\Notifications\VisitRejected;
use App\Notifications\VisitAccepted;
use App\Notifications\VisitStatusChanged;
use App\Notifications\VisitDateChanged;
use App\Notifications\VisitDateChangeRequested;
use Auth;

class VisitController extends Controller
{
    public function new_visit(int $id, int $customer_id, int $service_type_id)
    {
        $workshop= Workshops::find($id);
        if(Auth::user()!=NULL && Auth::user()->user_type==1)//jesli uzytkownik jest zwykly
        {
            if(Auth::user()->customer!=NULL)// ma klienta
            {
                $visit=new Visit;
                $visit_service_type=new Visit_Service_Type;
                $visit->status=0;
                $visit->customer_id=Auth::user()->customer->id;
                $visit->workshop_id=$id;
                $visit->date=date("Y-m-d");
                $visit->save();
                $visit_service_type->visit_id=$visit->id;
                $visit_service_type->service_type_id=$service_type_id;
                $visit_service_type->save();
                $workshop->user->notify(new NewVisit($visit->customer, $workshop, $visit));
                return redirect("workshop/$workshop->id");
            }
            else//a jesli nie
            {
                //$message="Nie istnieje klient dla danego konta, proszę utworzyć";
                return redirect("account/customer/new")->with('message', 'Nie istnieje klient dla danego konta, proszę utworzyć');
            }
        }
        if(Auth::user()==NULL)
        {
                $visit=new Visit;
                $visit_service_type=new Visit_Service_Type;
                $visit->status=0;
                $visit->customer_id=$customer_id;
                $visit->workshop_id=$id;
                $visit->date=date("Y-m-d");
                $visit->save();
                $visit_service_type->visit_id=$visit->id;
                $visit_service_type->service_type_id=$service_type_id;
                $visit_service_type->save();
                $workshop->user->notify(new NewVisit($visit->customer, $workshop, $visit));
                return redirect("workshop/$workshop->id");
        }
    }
    public function visit_page(int $id)
    {
        $visit= Visit::find($id);
        $visit_service_type= Visit_Service_Type::where('visit_id', $id)->first();
        return view('visit_page', ['visit'=>$visit, 'visit_service_type'=>$visit_service_type]);
    }
    public function update_visit(int $id, Request $request)
    {
        $visit=Visit::find($id);
        $workshop=$visit->workshop;
        if($request->date!=NULL)
        {
            $visit->date=$request->date;
            $visit->customer->user->notify(new VisitDateChanged($workshop, $visit));
        }
        if($request->status!=$visit->status)
        {
            $visit->status=$request->status;
            $visit->customer->user->notify(new VisitStatusChanged($workshop, $visit));
        }
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
        $visit->customer->user->notify(new VisitRejected($workshop, $visit));
        $visit->delete();
        return redirect("/workshop/$workshop->id/visits");
    }
    public function accept_visit(int $id)
    {
        $visit= Visit::find($id);
        $workshop=$visit->workshop;
        $visit->status=1;
        $visit->save();
        $visit->customer->user->notify(new VisitAccepted($workshop, $visit));
        return redirect()->back();
    }
    public function request_date_change(int $id)
    {
        $visit= Visit::find($id);
        $workshop=$visit->workshop;
        $workshop->user->notify(new VisitDateChangeRequested($workshop, $visit));
        return redirect()->back()->with('message', 'Wysłano prośbę o zmianę terminu');
    }

    public function notification_clicked(String $notif_id, int $visit_id)
    {
        $notification=Auth::user()->unreadNotifications->where('id',$notif_id)->first();
        $notification->markAsRead();
        if($visit_id==0)
        {
            return redirect('/account/notifications');
        }
        return redirect("/visit/$visit_id");
    }
}