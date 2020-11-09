@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>{{ $workshop->name }}</h1>
    <h5>{{ $workshop->workshop_type->name }}  |  <i class="fas fa-map-marker-alt"></i>{{ $workshop->address->city->name }}</h5>
    <p>{{ $workshop->description }}</p>
    <h3>Opinie</h3>
    <h3>Umów się na wizytę</h3>
    @if(Auth::user()!=NULL)
    <a href="/workshop/{{ $workshop->id }}/appoint/0" class="btn btn-primary">Umów się</a>
    @else
    @include('inc.popup')
    @endif
    </div>
@endsection
