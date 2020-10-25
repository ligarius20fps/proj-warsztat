@extends('layouts.app')
@section('content')
<div class="container">
 <h1>Wyniki wyszukiwania</h1>

 <button class="btn btn-primary">Filtruj</button>
 
 <ul>
 @if(isset($details))
 @foreach($details as $workshop)

 <li>{​​{​​ $workshop->name }​​}​​</li>

 @endforeach
 @endif
 </ul>
</div>
 @endsection