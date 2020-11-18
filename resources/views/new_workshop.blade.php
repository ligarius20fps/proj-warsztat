@extends('layouts.app')
@section('content')
<div class="container">
@if(request()->route('id')==null)
<h1>Dodaj warsztat</h1>
@else
<h1>Edytuj warsztat</h1>
    @if($hasPriceList==0)
    <a href="/account/workshops/{{ $workshop->id }}/price-list/create" class="btn btn-primary">Dodaj Cennik</a><br/><br/>
    @else
    <a href="/account/workshops/{{ $workshop->id }}/price-list" class="btn btn-primary">Edytuj Cennik</a><br/><br/>
    @endif
@endif
<form action="{{url('/account/workshops')}}" method="POST">
    @csrf
    @if(request()->route('id')!=null)
    <input type="hidden" value="{{ request()->route('id') }}" name="workshop_id">
    @endif
    <div class="form-group">
        <label for="">Nazwa warsztatu</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="">Rodzaj warsztatu</label>
        <select class="form-control" name="workshop_type_id">
            @foreach($workshop_types as $workshop_type)
            <option value="{{ $workshop_type->id }}">{{ $workshop_type->name }}</option>
            @endforeach
        </select>
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