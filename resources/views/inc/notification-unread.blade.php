<table class="table table-striped">
@foreach(Auth::user()->unreadNotifications as $notification)
<tr><td>@switch($notification->type)
        @case("App\Notifications\NewVisit")
        {{ $notification->data["message"] }} {{ $notification->data["workshop"] }} 
        Klient: {{ $notification->data["customer"]}}
        <br/><a href="/notification/{{$notification->id}}/visit/{{$notification->data['visit']}}/more">
            <i class="fa fa-arrow-right"></i>Więcej</a>
            @break
            @endswitch</td></tr>
@endforeach
</table>