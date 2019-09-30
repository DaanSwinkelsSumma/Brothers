@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    <div class="row">
        <div class="col">
            <h5>Naam:</h5>
        </div>
        <div class="col">
            <h5>Bijnaam</h5>
        </div>
        <div class="col">
            <h5>Email:</h5>
        </div>
    </div>
    @foreach ($leden as $lid)
        <a href="/lid/{{ $lid->id }}">
            <div class="row align lid">
                <div class="col">{{ $lid->name }}</div>
                <div class="col">{{ $lid->Bijnamen }}</div>
                <div class="col">{{ $lid->email }}</div>
            </div>
        </a>
        <br>
    @endforeach
</div>
@endsection
