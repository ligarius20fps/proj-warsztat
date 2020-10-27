@extends('layouts.app')
@section('content')
<div class="container">
 <h1>Wyniki wyszukiwania</h1>

 <button class="btn btn-primary">Filtruj</button>
 <br><br>
 <table class="table table-striped">
     <thead></thead>
     <tbody>
 @foreach($workshops as $workshop)
 <tr><td>
    <a href="/workshop/{{ $workshop->id }}"> {{ $workshop->name }} </a>
 </td>
 <td>Rodzaj</td>
 <td>Miasto</td>
 </tr>
 @endforeach
 <tbody>
 </table>

</div>
 @endsection