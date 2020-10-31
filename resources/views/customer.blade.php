@extends('layouts.app')
@section('content')
<div class="container">
<h1>Dane kontaktowe</h1>
<form action="{{url('/account')}}" method="POST">
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
        <input type="number" class="form-control" name="building_number">
    </div>
    <div class="form-group">
        <label for="">Nr telefonu</label>
        <input type="text" class="form-control" name="phone_number">
    </div>
<button class="btn btn-primary" type="submit">Dodaj</button>
</form>
</div>
@endsection

