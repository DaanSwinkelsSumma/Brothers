@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <form action="/updatemember/{{$user->id}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <h3>Naam:</h3>
                <input type="text" name="naam" class="form-control" value="{{$user->name}}">
                <br>
                <h3>Bijnaam:</h3>
                <input type="text" name="bijnaam" class="form-control" value="{{$user->Bijnamen}}">
                <br>
                <h3>Email:</h3>
                <input type="text" name="email" class="form-control" value="{{$user->email}}">
            </div>
            <div class="col-5">
                <h3>Omschrijving:</h3>
                <textarea type="text" name="omschrijving" class="form-control"  rows="10" cols="10">{{$user->Omschrijving}}</textarea>
                <br>
                <input type="submit" class="btn btn-primary" value="Update-">
            </div>
            <div class="col"></div>
        </div>
    </form>
</div>
@endsection
