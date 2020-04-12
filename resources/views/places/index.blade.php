@extends('layouts.app')

@section('content')
    <h1>Places</h1>
    @if (count($places) > 0)
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for place or address..." aria-label="Search for place or address..." aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-info" type="submit" id="button-addon2">Search</button>
            </div>
        </div>
        @foreach ($places as $place)
            <div class="card">
                <h3 class="card-header"><a href="/places/{{$place->id}}">{{$place->place_name}}</a></h3>
                <div class="card-body">{{$place->place_address}} <br> Last update: <b>{{$place->updated_at}}</b></div>
            </div>
        @endforeach
        {{$places->links()}}
    @else
        <p>No places in database</p>
    @endif
@endsection