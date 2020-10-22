@extends('layouts.app')
@section('content')
<div class="container">
     <h1>{{ Auth::user()->name }}</h1>
     <p>Użytkownik od {{ Auth::user()->created_at }}</p>
     <button class="btn btn-primary">Zmień hasło</button><br/><br/>
     <button class="btn btn-primary">Historia wizyt</button>
</div>
@endsection