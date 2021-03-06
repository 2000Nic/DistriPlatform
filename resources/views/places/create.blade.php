@extends('layouts.app')

@section('content')
    <form action="{{ route('places.store')}}" method="post">
        @csrf
        <div class="form-group row justify-content-center">
            <label for="place-name" class="col-md-2 col-form-label">Place name:</label>
            <div class="col-md-6">
                <input type="text" name="place-name" class="form-control" placeholder="Name" id="">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="place-address" class="col-md-2 col-form-label">Place address:</label>
            <div class="col-md-6">
                <input type="text" name="place-address" class="form-control" placeholder="Address" id="">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="place-phone" class="col-md-2 col-form-label">Place phonenumber:</label>
            <div class="col-md-6">
                <input type="text" name="place-phone" class="form-control" placeholder="Phonenumber" id="">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="place-google-url" class="col-md-2 col-form-label">Google URL:</label>
            <div class="col-md-4">
                <input type="text" name="place-google-url" class="form-control" placeholder="URL" id="">
            </div>
            <button class="btn btn-outline-info col-md-2" onclick="autofill()">Auto-Fill</button>
        </div>
        <div class="form-group row justify-content-center">
            <label for="place-remarks" class="col-md-2 col-form-label">Remarks:</label>
            <div class="col-md-6">
                <textarea name="place-remarks" class="form-control" placeholder="Remarks go here" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <button class="form-control col-md-8 btn btn-info" type="submit">Submit</button>
        </div>
    </form>
@endsection
