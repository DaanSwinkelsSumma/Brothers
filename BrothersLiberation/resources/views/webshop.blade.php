@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <select class="form-control" onchange="window.location=this.options[this.selectedIndex].value">
                <option disabled selected hidden>Categorieën:</option>
                @foreach ($cats as $cat)
                    <option class="form-control" value="/webshop/filter/{{$cat->productcategorie}}">{{$cat->productcategorie}}</option>
                @endforeach
                <option class="form-control" value="/webshop">Alle producten</option>

            </select>
        </div>
        <div class="col" >

        </div>
        <div class="col" style="text-align:right">
            @if($user = Auth::user())
                <a href="/newproduct">
                    <button class="btn btn-secondary">Nieuw product</button>
                </a>
            @endif
            &nbsp;&nbsp;
            <a href="/cart">
                <img src="{{ asset('img/cart.png') }}" height="50px" width="50px" >
            </a>
        </div>

    </div>
    <div class="row" >
        @foreach ($products as $product)
            <div class="col-4">
                <div class="card product">
                    <img src="{{ $product->productimage }}" class="card-img-top" >
                    <div class="card-body">
                    <h5 class="card-title">{{$product->productnaam}}</h5>
                    <p class="card-text">{{$product->productcategorie}}</p>
                    <p class="card-text">€ {{$product->productprijs}},-</p>
                    <a href="/product/{{$product->productid}}" class="btn btn-primary">Bekijk product</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
