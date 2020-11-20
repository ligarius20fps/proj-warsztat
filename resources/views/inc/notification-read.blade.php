<table class="table table-striped">
@foreach(Auth::user()->readNotifications as $notification)
<tr><td>@switch($notification->type)
        @case("App\Notifications\NewVisit")
        {{ $notification->data["message"] }} {{ $notification->data["workshop"] }} 
        Klient: {{ $notification->data["customer"]}}
        @break
        @endswitch</td></tr>
@endforeach
</table>