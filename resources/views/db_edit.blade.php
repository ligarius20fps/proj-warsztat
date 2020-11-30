@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edytuj bazę danych</h1>
    <h3>Dodaj:</h3>
    <a href="/db-edit/1" class="btn btn-primary">Miasto</a><br/><br/>
    <a href="/db-edit/2" class="btn btn-primary">Typ warsztatu</a><br/><br/>
    <a href="/db-edit/3" class="btn btn-primary">Typ usługi</a><br/><br/>
    @isset($table)
        <br/><br/>
    @if($table==1)
        <h3>Dodaj miasto</h3>
        <form action="/city/add" method="post">
            @csrf
            <label for="">Województwo</label>
            <select class="form-control" name="voivodeship">
            @foreach($voivodeships as $voivodeship)
                <option value="{{$voivodeship->id}}">{{$voivodeship->name}}</option>
            @endforeach
            </select><br/>
            <label for="">Nazwa Miasta</label>
            <input type="text" name="name" class="form-control"><br/>
            <button class="btn btn-primary" type="submit">Dodaj</button>
        </form>
    @else
        @if($table==2)
        <h3>Dodaj rodzaj warsztatu</h3>
        <form action="/workshop_type/add" method="post">
        @else
        <h3>Dodaj rodzaj usługi</h3>
        <form action="/service_type/add" method="post">
        @endif
            @csrf
            <label for="">Nazwa</label>
            <input type="text" name="name" class="form-control"><br/>
            <button class="btn btn-primary" type="submit">Dodaj</button>
        </form>
    @endif
    @endisset
</div>
@endsection

