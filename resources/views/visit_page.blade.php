@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Szczegóły wizyty</h1>
    Wizyta nr #{{ $visit->id }} | {{ $visit->date}}<br/>
    Klient: {{ $visit->customer->name }} <br/>
    Warsztat: {{ $visit->workshop->name }}<br/>
    Status: 
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
    @if(Auth::user()->user_type==2)
    <br/><br/><h4>Edytuj szczegóły wizyty</h4>
    <form action="/visit/{{ $visit->id }}/update" method="POST">
        @csrf
        <input class="form-control" type="date" name="date">
        <select class="form-control" name="status">
            <option value="0">Oczekiwanie na realizację</option>
            <option value="1">W trakcie realizacji</option>
            <option value="2">Zrealizowano</option>
        </select>
        <button class="btn btn-primary" type="submit">OK</button>
    </form>
    @endif
</div>
@endsection

