@extends('layouts.app')

@section('content')
    <h1>Places</h1>
    @if (count($places) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Google Maps</th>
                    <th>Address</th>
                    <th>Remarks</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            @foreach ($places as $place)
                <tr>
                    <td>{{$place->id}}</td>
                    <td>{{$place->place_name}}</td>
                    <td>{{$place->place_google_url}}</td>
                    <td>{{$place->place_address}}</td>
                    <td>{{$place->place_remarks}}</td>
                    <td>{{$place->updated_at}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No places in database</p>
    @endif
@endsection