<?php

namespace App\Http\Controllers;
use App\Models\Workshops;
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
}
