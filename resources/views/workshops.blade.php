@extends('layouts.app')
@section('content')
<div class="container">
     <h1>Moje warsztaty</h1>
     <a class="btn btn-primary" href="{{ '/account/workshops/new' }}">Dodaj warsztat</a>
     <table class="table table-striped">
     <thead></thead>
     <tbody>
 @foreach($workshops as $workshop)
 <tr><td>
    <a href="/workshop/{{ $workshop->id }}"> {{ $workshop->name }} </a>
 </td></tr>
 @endforeach
 <tbody>
 </table>
</div>
@endsection