@extends('layouts.app')
@section('content')
<div class="container">
     <h1>Historia wizyt</h1>
     <table class="table table-striped">
     <thead></thead>
     <tbody>
 @foreach($visits as $visit)
 <tr><td>
    {{ $visit->workshop->name }}
     </td><td>{{ $visit->date }}</td>
     <td>{{ $visit->status }}</td>
     <td><button>Wystaw Ocenę</button></td></tr>
 @endforeach
 <tbody>
 </table>
</div>
@endsection

