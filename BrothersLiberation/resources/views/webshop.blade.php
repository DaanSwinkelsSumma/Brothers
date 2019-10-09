@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h4>Filters</h4>
        </div>
        <div class="col" >
            <select class="form-control">
                <option disabled selected hidden>Categorieën:</option>
                @foreach ($cats as $cat)
                    <option class="form-control">{{$cat->productcategorie}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
        </div>

    </div>
    <div class="row" >
        @foreach ($products as $product)
            <div class="col-4">
                <div class="card product">
                    <img src="{{ $product->productimage }}" class="card-img-top" >
                    <div class="card-body">
                    <h5 class="card-title">{{$product->productnaam}}</h5>
                    <p class="card-text">€ {{$product->productprijs}},-</p>
                    <a href="/product/{{$product->productid}}" class="btn btn-primary">Bekijk product</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
