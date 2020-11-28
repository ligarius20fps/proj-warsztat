@extends('layouts.app')
@section('content')
    <script>
        function getSelectedValue()
        {
            var v=document.getElementById("s_type").selectedIndex.value;
            return v;
        }
    </script>
    <div class="container">
    <h1>{{ $workshop->name }}</h1>
    <h5>{{ $workshop->workshop_type->name }}  |  <i class="fa fa-map-marker"></i> {{ $workshop->address->city->name }}</h5>
    <br/>
    <p>{{ $workshop->description }}</p><br/><br/>
    <div class="row">
    <div class="col-md-5">
    <h3>Adres</h3>
    {{ $workshop->address->street_name }} {{ $workshop->address->building_number }}
    <br/>{{ $workshop->address->postal_code }} {{ $workshop->address->city->name }}
    </div>
    <div class="col-md-5">
    <h3>Kontakt</h3>
    <i class="fa fa-phone"></i> {{ $workshop->phone_number}}<br/>
    <i class="fa fa-envelope"></i> {{ $workshop->email }}
    </div>
    </div><br/><br/>
    <h3>Lista usług i cennik</h3>
    @if($prices==null || $prices->count()==0)
    Brak listy usług <br/><br/>
    @else
    <table class="table table-striped">
    @foreach($prices as $price)
    <tr>
        <td>{{ $price->service_type->name }}</td>
        <td>{{ $price->price }} PLN</td>
        <td>@switch($price->agreeable)
        @case(1)
        Do uzgodnienia
        @break
        @case(0)
        Nie do uzgodnienia
        @break
        @endswitch
        </td>
    </tr>
    @endforeach
    <br/><br/>
    @endif
</table>
    <h3>Umów się na wizytę</h3>
    <select name="service_type" onchange="getSelectedValue()" class="form-control" id="s_type">
    @foreach($service_types as $service_type)
    <option value="{{$service_type->id}}">{{$service_type->name}}</option>
    @endforeach
    </select>
    <br/>
    @if(Auth::user()!=NULL)
    <a href="/workshop/{{ $workshop->id }}/appoint/0/{{$service_types[0]->id}}" class="btn btn-primary">Umów się</a>
    @else
    @include('inc.popup')
    @endif
    <br/>
    <h3>Opinie</h3>
    <h5>Ocena: {{ $workshop->rating }} spośród {{ $reviews->count() }} opinii</h5>
    @foreach($reviews as $review)
    <div class="card">
    <div class="card-header"><b>{{$review->user->name}}</b>&emsp;Ocenił na: <b>{{$review->rating}}</b>&emsp;{{$review->created_at}}</div>
    <div class="card-body">
    <div class="clearfix">{{ $review->description }}</div><br/>
    </div>
    </div>
    <br/>
    @endforeach
    @if(Auth::user()!=NULL && Auth::user()->user_type==0)
    @include('inc.reject-workshop')
    @endif
    </div>
@endsection
