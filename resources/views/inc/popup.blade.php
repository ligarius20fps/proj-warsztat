<button class="btn btn-primary" data-toggle="modal" data-target="#popup">Umów się</button>
<div class="modal fade" id="popup" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Użytkownik jest niezalogowany</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <a class="btn btn-primary" href="{{ route('login') }}">Zaloguj się</a> <br/><br/>
                <a class="btn btn-primary" href="{{ route('register') }}">Zarejestruj</a> <br/><br/>
                <a class="btn btn-primary" href="/workshop/{{ $workshop->id }}/guest-visit/{{$service_types[0]->id}}">Umów się jako gość</a>
            </div>
        </div>
    </div>
</div>

