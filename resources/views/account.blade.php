@extends('layouts.app')
@section('content')
<div class="container">
     <h1>{{ Auth::user()->name }}</h1>
     <p>Użytkownik od {{ Auth::user()->created_at }}</p>
     <button class="btn btn-primary">Zmień hasło</button><br/><br/>
     @if(Auth::user()->user_type == 1)
     <a class="btn btn-primary" href="/account/customer">Edytuj dane kontaktowe</a>
     <a class="btn btn-primary" href="/account/workshops/visits">Historia wizyt</a>
     @elseif(Auth::user()->user_type == 2)
     <a class="btn btn-primary" href="/account/workshops">Moje warsztaty</a>
     @endif
</div>
@endsection