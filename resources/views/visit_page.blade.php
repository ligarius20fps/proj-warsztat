@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Szczegóły wizyty</h1>
    Wizyta nr #{{ $visit->id }} | {{ $visit->date}}<br/><br/>
    <div class="row">
    <div class="col-md-5"><h3>Klient</h3>
    {{ $visit->customer->name }} <br/>
    <i class="fa fa-phone"></i> {{ $visit->customer->phone_number }}<br/>
    <i class="fa fa-envelope"></i> {{ $visit->customer->email }}<br/>
    {{ $visit->customer->address->street_name }} {{ $visit->customer->address->building_number }}
    <br/>{{ $visit->customer->address->postal_code }} {{ $visit->customer->address->city->name }}
    </div>
    <div class="col-md-5"><h3>Warsztat</h3>
    {{ $visit->workshop->name }}<br/>
    <i class="fa fa-phone"></i> {{ $visit->workshop->phone_number }}<br/>
    <i class="fa fa-envelope"></i> {{ $visit->workshop->email }}<br/>
    {{ $visit->workshop->address->street_name }} {{ $visit->workshop->address->building_number }}
    <br/>{{ $visit->workshop->address->postal_code }} {{ $visit->workshop->address->city->name }}
    </div>
    </div>
    <br/>
    Status: 
    @switch($visit->status)
            @case(0)
                Oczekiwanie na potwierdzenie
                @break
            @case(1)
                Oczekiwanie na realizację
                @break
            @case(2)
                W trakcie realizacji
                @break
            @case(3)
                Zrealizowano
                @break
            @default
                Nieznany status
                @break
        @endswitch
    @if(Auth::user()->user_type==2)
        @if($visit->status!=0)
    <br/><br/><h4>Edytuj szczegóły wizyty</h4>
    <form action="/visit/{{ $visit->id }}/update" method="POST">
        @csrf
        <input class="form-control" type="date" name="date">
        <select class="form-control" name="status">
            <option value="1">Oczekiwanie na realizację</option>
            <option value="2">W trakcie realizacji</option>
            <option value="3">Zrealizowano</option>
        </select>
        <button class="btn btn-primary" type="submit">OK</button>
    </form>
        @else
        <br/><br/>
        <div class="row">
            <div class="col-md-5">
                <a href="/visit/{{$visit->id}}/accept" class="btn btn-success">
                    <i class="fa fa-check"></i> Potwierdź wizytę</a>
            </div>
            <div class="col-md-5">
                <a href="/visit/{{$visit->id}}/reject" class="btn btn-danger"><i class="fa fa-times"></i> Odrzuć wizytę</a>
            </div></div>
        @endif
    @endif
</div>
@endsection

