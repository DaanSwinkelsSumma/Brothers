@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <form action="/updatemember/{{$user->id}}">
                <h3>Naam:</h3>
                <input type="text" name="naam" class="form-control" value="{{$user->name}}">
                <br>
                <h3>Bijnaam:</h3>
                <input type="text" name="bijnaam" class="form-control" value="{{$user->Bijnamen}}">
                <br>
                <h3>Email:</h3>
                <input type="text" name="email" class="form-control" value="{{$user->email}}">
                <br>
                <h3>Omschrijving:</h3>
                <textarea type="text" name="omschrijving" class="form-control"  rows="8" cols="10">{{$user->Omschrijving}}</textarea>
                <br>
                <input type="submit" class="btn btn-primary" value="Update">
            </form>
        </div>
        <div class="col">
            
        </div>
    </div>
</div>
@endsection
