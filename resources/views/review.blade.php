@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Wystaw opinię</h1>
    <form method="POST" action="/visit/{{ $visit->id }}">
        @csrf
        <textarea name="description" class="form-control" placeholder="Wpisz treść opinii"></textarea>
        
        <input type="radio" id="rating_1" name="rating" value="1">
        <label for="rating_1">1</label>
        <input type="radio" id="rating_2" name="rating" value="2">
        <label for="rating_2">2</label>
        <input type="radio" id="rating_3" name="rating" value="3">
        <label for="rating_3">3</label>
        <input type="radio" id="rating_4" name="rating" value="4">
        <label for="rating_4">4</label>
        <input type="radio" id="rating_5" name="rating" value="5">
        <label for="rating_5">5</label>
        
        <button class="btn btn-primary" type="submit">Wystaw opinię</button>
    </form>
</div>
@endsection