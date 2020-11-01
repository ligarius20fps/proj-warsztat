@extends('layouts.app')
@section('content')

<div class="container">
    <h1>
        Dane kontaktowe
    </h1>
    <div>
        {{ $customer->name }}<br/>
        {{ $customer->email }}<br/>
        {{ $customer->phone_number }}<br/>
        {{ $customer->address->city->name }}<br/>
        {{ $customer->address->street_name }}<br/>
        {{ $customer->address->building_number }}<br/>
    </div>
</div>

@endsection