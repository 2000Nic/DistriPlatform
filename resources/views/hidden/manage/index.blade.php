@extends('layouts.app')

@section('content')
    <h1>Management Panel</h1>

    <a href="/manage?page=routes" class="card text-center col-sm-3 d-inline-block mx-3 my-3" style="height: 20vh;">
        <br><br><h2>Manage Routes</h2>
        <h2 style="font-size: 4em;"><i class="fas fa-route"></i></h2>
    </a>
    <a href="/manage?page=cards" class="card text-center col-sm-3 d-inline-block mx-3 my-3" style="height: 20vh;">
        <br><br><h2>Manage Cards</h2>
        <h2 style="font-size: 4em;"><i class="fas fa-toilet-paper"></i></h2>
    </a>
    <a href="/places" class="card text-center col-sm-3 d-inline-block mx-3 my-3" style="height: 20vh;">
        <br><br><h2>Manage Place</h2>
        <h2 h2 style="font-size: 4em;"><i class="fas fa-thumbtack"></i></h2>
    </a>
    <a href="/manage?page=fleet" class="card text-center col-sm-3 d-inline-block mx-3 my-3" style="height: 20vh;">
        <br><br><h2>Manage Fleet</h2>
        <h2 h2 style="font-size: 4em;"><i class="fas fa-paper-plane"></i></h2>
    </a>
    <a href="/manage?page=posts" class="card text-center col-sm-3 d-inline-block mx-3 my-3" style="height: 20vh;">
        <br><br><h2>Manage Posts</h2>
        <h2 style="font-size: 4em;"><i class="fas fa-newspaper"></i></h2>
    </a>
@endsection