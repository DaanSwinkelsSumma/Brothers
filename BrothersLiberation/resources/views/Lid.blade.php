@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h3>{{$user->name}}</h3>
            <br>
            <h5>{{$user->Bijnamen}}</h5>
            <br>
            <h5>{{$user->email}}</h5>
            <br>
            <textarea class="form-control">{{$user->Omschrijving}}</textarea>
        </div>
        <div class="col">
            
        </div>
    </div>
</div>
@endsection
