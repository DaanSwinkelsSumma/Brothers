@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Brothers of liberation</h2>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5>We are a brotherhood from the Netherlands. 🇳🇱</h5>

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <h4>Over ons</h4>
            <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</h5>
        </div>
    </div>
    <br>
    <div class="row imagesalign">
        <div class="col">
            <img src="{{ asset('img/Bol.jpg') }}" alt="BOL" height="300" width="400" class="img-fluid">
        </div>
        <div class="col">
            <img src="{{ asset('img/Bol2.jpg') }}" alt="BOL" height="300" width="400" class="img-fluid">
        </div>
    </div>
</div>
@endsection

