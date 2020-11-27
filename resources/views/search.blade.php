@extends('layouts.app')
@section('content')
<div class="container">
 <h1>Wyniki wyszukiwania</h1>

 <button class="btn btn-primary">Filtruj</button>
 <br><br>
 @if($count!=0)
 Wyswietlanie wyników dla: <b>{{ $q }}</b>
 @else
 Brak wyników
 @endif
 <table class="table table-striped">
     <thead></thead>
     <tbody>
 @foreach($workshops as $workshop)
 <tr><td>
    <a href="/workshop/{{ $workshop->WorkshopId }}"> {{ $workshop->WorkshopName }} </a>
 </td>
 <td>{{ $workshop->workshop_type->name }}</td>
 <td><i class="fa fa-map-marker"></i> {{ $workshop->address->city->name }}</td>
  <td>@if($workshop->WorkshopRating!=NULL){{ $workshop->WorkshopRating }}
      @else
      Brak opinii
      @endif
  </td>
 </tr>
 @endforeach
 <tbody>
 </table>
 <div class="container">
     {!! $workshops->render() !!}
 </div>
</div>
 @endsection