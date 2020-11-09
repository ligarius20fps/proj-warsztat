@extends('layouts.app')
@section('content')
<div class="container">
<h1>Dane kontaktowe</h1>
@isset($message)
{{ $message }}
@endisset
@if(Auth::user()!=NULL && Auth::user()->customer!=NULL)
{{ $customer->name }}<br/>
{{ $customer->address->street_name }} 
{{ $customer->address->building_number }}<br/>
{{ $customer->address->postal_code }}  
{{ $customer->address->city->name }}  <br/>
tel. {{ $customer->phone_number }}<br/>
{{ $customer->email }}<br/>
@endif
@if(Auth::user()!=null)
<form action="{{url('/account')}}" method="POST">
@else
<form action="/workshop/{{ request()->route('id') }}" method="POST">
@endif
@csrf
<div class="form-group">
        <label for="">Imię</label>
        <input type="text" class="form-control" name="first_name">
    </div>
<div class="form-group">
        <label for="">Nazwisko</label>
        <input type="text" class="form-control" name="last_name">
    </div>
<div class="form-group">
        <label for="">Nazwa Firmy</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="">Miasto</label>
        <select class="form-control" name="city_id">
            @foreach($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Ulica</label>
        <input type="text" class="form-control" name="street_name">
    </div>
    <div class="form-group">
        <label for="">Kod Pocztowy</label>
        <input type="text" class="form-control" name="postal_code">
    </div>
    <div class="form-group">
        <label for="">Nr Budynku</label>
        <input type="text" class="form-control" name="building_number">
    </div>
    <div class="form-group">
        <label for="">Nr telefonu</label>
        <input type="text" class="form-control" name="phone_number">
    </div>
    @if( Auth::user() == NULL)
        <label for="">Adres email</label>
        <input type="email" class="form-control" name="email">
    @endif
<button class="btn btn-primary" type="submit">Dodaj</button>
</form>
</div>
@endsection

