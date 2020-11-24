<table class="table table-striped">
@foreach(Auth::user()->unreadNotifications as $notification)
<tr><td>
    {{ $notification->data["message"] }}
    <br/>
    @if($notification->type=='App\Notifications\NewWorkshop')
    <a href="/notification/{{$notification->id}}/workshop/{{$notification->data['workshop']}}/more">
        <i class="fa fa-arrow-right"></i>Więcej</a>
    @elseif($notification->type=='App\Notifications\WorkshopRejected'||$notification->type=='App\Notifications\VisitRejected')
    <a href="/notification/{{$notification->id}}/visit/0/more">
    Oznacz jako przeczytane</a>
    @else
    <a href="/notification/{{$notification->id}}/visit/{{$notification->data['visit']}}/more">
    <i class="fa fa-arrow-right"></i>Więcej</a>
    @endif
    </td></tr>
@endforeach
</table>