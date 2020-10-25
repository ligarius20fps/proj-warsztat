@extends('layouts.app')
@section('title', $workshop->name)
@section('content')
    <div class="container">
    <h1>{{ $workshop->name }}</h1>
    <p>{{ $workshop->description }}</p>
    <div>
        
    </div>
    </div>
@endsection
