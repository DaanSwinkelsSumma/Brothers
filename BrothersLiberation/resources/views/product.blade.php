@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h3>{{$product->productnaam}}</h3>
        </div>
        <div class="col" style="text-align:right">
            @if($user = Auth::user())
                <form action="/deleteproduct/{{$product->productid}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-secondary">Delete product</button>
                </form>
            @endif
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
            <br>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <a href="/order/{{$product->productid}}">
                <button class="btn btn-secondary">Bestel product</button>
            </a>
        </div>
    </div>
</div>
@endsection
