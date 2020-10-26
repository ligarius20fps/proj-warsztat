@extends('layouts.app')
@section('content')
<div class="container">
<h1>Dodaj warsztat</h1>
<form action="{{url('/account/workshops')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nazwa warsztatu</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="">Rodzaj warsztatu</label>
        <select name="workshop_type_id">
            @foreach($workshop_types as $workshop_type)
            <option value="{{ $workshop_type->id }}">{{ $workshop_type->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Miasto</label>
        <select name="city_id">
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
    <div class="form-group">
        <label for="">Adres email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="">Opis</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Dodaj</button>
</form>
</div>
@endsection