@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h3>{{$product->productnaam}}</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <img src="{{ $product->productimage }}" >
        </div>
        <div class="col">
            <h4>Categorie:</h4>
            <p>{{ $product->productcategorie }}</p>
            <h4>Prijs:</h4>
            <p>€ {{ $product->productprijs }}</p>
            <h4>Omschrijving:</h4>
            <p>{{ $product->productomschrijving }}</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <a href="/order/{{$product->productid}}">
                <button class="btn btn-secondary">Bestel</button>
            </a>
        </div>
    </div>
</div>
@endsection
