<table class="table table-striped">
@foreach(Auth::user()->readNotifications as $notification)
<tr><td>
    {{ $notification->data["message"] }}
</td></tr>
@endforeach
</table>