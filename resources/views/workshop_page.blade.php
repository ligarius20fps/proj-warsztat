@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>{{ $workshop->name }}</h1>
    <h5>{{ $workshop->workshop_type->name }}  |  <i class="fas fa-map-marker-alt"></i>{{ $workshop->address->city->name }}</h5>
    <p>{{ $workshop->description }}</p>
    <h3>Opinie</h3>
    @foreach($reviews as $review)
    <div class="card">
    <div class="card-header"><b>{{$review->user->name}}</b>&emsp;Ocenił na: <b>{{$review->rating}}</b>&emsp;{{$review->created_at}}</div>
    <div class="card-body">
    <div class="clearfix">{{ $review->description }}</div><br/>
    </div>
    </div>
    <br/>
    @endforeach
    <h3>Umów się na wizytę</h3>
    <form>
    <select name="service_type" class="form-control">
    @foreach($service_types as $service_type)
    <option value="{{$service_type->id}}">{{$service_type->name}}</option>
    @endforeach
    </select>
    <br/>
    @if(Auth::user()!=NULL)
    <a href="/workshop/{{ $workshop->id }}/appoint/0" class="btn btn-primary">Umów się</a>
    @else
    @include('inc.popup')
    @endif
    </form>
    </div>
@endsection
