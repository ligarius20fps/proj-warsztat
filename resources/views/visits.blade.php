@extends('layouts.app')
@section('content')
<div class="container">
     <h1>Historia wizyt</h1>
     <table class="table table-striped">
     <thead></thead>
     <tbody>
 @foreach($visits as $visit)
 <tr><td>
         @if(Auth::user()->user_type==1)
    {{ $visit->workshop->name }}
    @elseif(Auth::user()->user_type==2)
    {{ $visit->customer->name }}
    @endif
     </td><td>{{ $visit->date }}</td>
     <td>
         @switch($visit->status)
            @case(0)
                Oczekiwanie na realizację
                @break
            @case(1)
                W trakcie realizacji
                @break
            @case(2)
                Zrealizowano
                @break
            @default
                Nieznany status
                @break
        @endswitch
     </td>
     @if(Auth::user()->user_type==1)
        <td><button class="btn btn-primary">Wystaw Ocenę</button></td></tr>
     @elseif(Auth::user()->user_type==2)
        <td><button class="btn btn-primary">Zmień Status</button></td></tr>
     @endif
 @endforeach
 <tbody>
 </table>
</div>
@endsection

