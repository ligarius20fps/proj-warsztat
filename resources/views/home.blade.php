@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Wyszukiwanie warsztatów</h1>
</div>

<div class="container col-md-8">
    <div class="col-md-12">
        <form class="input-group mb-4">
                <input type="search" placeholder="Wpisz miasto/rodzaj usługi" aria-describedby="button-addon5" class="form-control">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>Wyszukuj warsztaty</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      </div>
      <div class="col-md-4">
        <h2>Umawiaj się na wizyty</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      </div>
      <div class="col-md-4">
        <h2>Wystawiaj opinię</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      </div>
    </div>
</div>
@endsection