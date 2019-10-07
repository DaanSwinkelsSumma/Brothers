@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h2>{{$user->name}}</h2>
            <br>
            <h3>Bijnaam:</h3>
            <h5>{{$user->Bijnamen}}</h5>
            <br>
            <h3>Email:</h3>
            <h5>{{$user->email}}</h5>
            <br>
            <h3>Omschrijving:</h3>
            <p>{{$user->Omschrijving}}</p>
        </div>
        <div class="col">
            <img src="{{$user->userimage}}" onerror=this.src="{{ url('/img/img-placeholder.png') }}" height="200px" width="300px">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/editmember/{{$user->id}}"><button class="btn btn-primary">Edit member</button> </a>
        </div>
    </div>
</div>
@endsection
