@extends('layouts.app')
@section('content')
<div class="container">
     <h1>@if(Auth::user()->user_type==1)
         Moje wizyty
     @else
        Wizyty warsztatu
     @endif</h1>
    <h4>Oczekiwane wizyty</h4>
     <table class="table table-striped">
     <thead></thead>
     <tbody>
 @foreach($visits as $visit)
         @if($visit->status==0 || $visit->status==1)
         <tr><td>
            @if(Auth::user()->user_type==1)
                {{ $visit->workshop->name }}
            @elseif(Auth::user()->user_type==2)
                {{ $visit->customer->name }}
            @endif
            </td><td>{{ $visit->date }}</td>
            <td>@if($visit->status==0)
                Oczekiwanie na potwierdzenie
                @else
                Oczekiwanie na realizację
                @endif
            </td>
            <td><a href="/visit/{{ $visit->id}}" class="btn btn-primary">Szczegóły</a></td></tr>
         @endif
 @endforeach
    </tbody>
    </table>
    <h4>W trakcie realizacji</h4>
     <table class="table table-striped">
     <thead></thead>
     <tbody>
    @foreach($visits as $visit)
        @if($visit->status==2)
        <tr><td>
            @if(Auth::user()->user_type==1)
                {{ $visit->workshop->name }}
            @elseif(Auth::user()->user_type==2)
                {{ $visit->customer->name }}
            @endif
            </td><td>{{ $visit->date }}</td>
            <td><a href="/visit/{{ $visit->id}}" class="btn btn-primary">Szczegóły</a></td></tr>
        @endif
 @endforeach
    </tbody>
    </table>
    <h4>Zrealizowane</h4>
    <table class="table table-striped">
    <thead></thead>
    <tbody>
    @foreach($visits as $visit)
        @if($visit->status==3)
        <tr><td>
            @if(Auth::user()->user_type==1)
                {{ $visit->workshop->name }}
            @elseif(Auth::user()->user_type==2)
                {{ $visit->customer->name }}
            @endif
            </td><td>{{ $visit->date }}</td>
            @if(Auth::user()->user_type==1)
            <td><a href="/visit/{{ $visit->id }}/review" class="btn btn-primary">Wystaw Ocenę</a></td>
            @endif
            <td><a href="/visit/{{ $visit->id}}" class="btn btn-primary">Szczegóły</a></td></tr>
        @endif
    @endforeach
 </tbody>
 </table>
</div>
@endsection