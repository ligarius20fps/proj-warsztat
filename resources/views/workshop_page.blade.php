@extends('layouts.app')
@section('content')
    <div class="container">
    @foreach($workshops as $workshop)
    <h1>{{ $workshop->name }}</h1>
    <p>{{ $workshop->description }}</p>
    @endforeach
    <h3>Opinie</h3>
    <h3>Umów się na wizytę</h3>
    <button class="btn btn-primary">Umów się</button>
    </div>
@endsection
