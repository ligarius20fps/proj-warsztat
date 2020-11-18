@extends('layouts.app')
@section('content')
<div class="container">
<h1>Edytuj cennik</h1>
<h3>Usługi</h3>
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
        <td><button class="btn btn-primary"><i class="fa fa-edit"></i> Edytuj</button></td>
        <td><a href="/price/{{$price->id}}/remove" class="btn btn-danger"><i class="fa fa-times"></i> Usuń</a></td>
    </tr>
    @endforeach
</table>
<button class="btn btn-primary" data-toggle="modal" data-target="#form"><i class="fa fa-plus"></i></button><br/>
<div class="modal fade" id="form" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Dodaj/Edytuj usługę</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        <form action="/account/workshops/{{$workshop->id}}/price-list/add" method="post">
        @csrf
        <div class="form-row">
        <div class="form-group col-md-10">
        <label for="">Rodzaj usługi</label>
        <select class="form-control" name="service_type">
            @foreach($service_types as $service_type)
            <option value="{{ $service_type->id}}">{{$service_type->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group col-md-9">
            <label for="">Cena</label>
            <input class="form-control" type="number" min="0.01" step=".01" name="price">
        </div>
            <div class="form-group col-md-1"><br/><br/>PLN</div>
        </div>
        <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="agreeable">
        <label class="form-check-label" for="">Do uzgodnienia</label>
        </div>
        </div>
        <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Dodaj</button>
        </div>
    </form>
    </div>
    </div>
    </div>
</div>
</div>
@endsection

