@extends('layouts.app')
@section('content')
<div class="container">
     <h1>{{ Auth::user()->name }}</h1>
     <p>Użytkownik od {{ Auth::user()->created_at }}</p>
     <button class="btn btn-primary">Zmień hasło</button><br/><br/>
     @if(Auth::user()->user_type == 1)
        @if(Auth::user()->customer==NULL)
     <a class="btn btn-primary" href="/account/customer/new">Dodaj dane kontaktowe</a>
        @else
     <a class="btn btn-primary" href="/account/customer/edit">Edytuj dane kontaktowe</a>
        @endif
        @if(Auth::user()->customer!=NULL)
     <a class="btn btn-primary" href="/account/visits">Moje wizyty</a>
         @endif
     @elseif(Auth::user()->user_type == 2)
     <a class="btn btn-primary" href="/account/workshops">Moje warsztaty</a>
     @else
     <a class="btn btn-primary" href="/db-edit">Edytuj bazę danych</a>
     @endif
</div>
@endsection