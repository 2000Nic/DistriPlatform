@extends('layouts.app')

@section('content')
    <h1>{{$place->place_name}}</h1>
    <small>Last updated at: {{$place->updated_at}}</small><br><br>
    <p><b>Address:</b> <br> {{$place->place_address}}</p>
    <p><b>Remarks:</b> <br> {{$place->place_remarks}}</p>
    @if (Auth::user()->type == 'admin' || Auth::user()->type == 'manager')
        <a href="{{$place->id}}/edit" class="btn btn-info">Edit</a>
    @endif
@endsection