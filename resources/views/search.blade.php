@extends('layouts.app')
@section('content')
<div class="container">
 <h1>Wyniki wyszukiwania</h1>

 <button class="btn btn-primary">Filtruj</button>
 
 <ul>
@if(count($errors)>0)
 @foreach($workshops as $workshop)

 <li><a href="/warsztat/{​​{​​ $workshop->id }​​}​​">{​​{​​ $workshop->name }​​}​​</a></li>

 @endforeach
@endif
 </ul>
</div>
 @endsection