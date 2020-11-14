@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>{{ $workshop->name }}</h1>
    <h5>{{ $workshop->workshop_type->name }}  |  <i class="fas fa-map-marker-alt"></i>{{ $workshop->address->city->name }}</h5>
    <p>{{ $workshop->description }}</p>
    <h3>Opinie</h3>
    <div >
    @foreach($reviews as $review)
    <h4>{{$review->user->name}}&emsp;Ocenił na: {{$review->rating}}</h4>
    {{$review->created_at}}
    <br/><div>{{ $review->description }}</div><br/>
    @endforeach
    </div>
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
