@extends('layouts.app')
@section('content')
<div class="container">
<h1>Powiadomienia</h1>
<h3>Nieprzeczytane</h3>
@include('inc.notification-unread')
<br/><br/>
<h3>Przeczytane</h3>
@include('inc.notification-read')
</div>
@endsection
