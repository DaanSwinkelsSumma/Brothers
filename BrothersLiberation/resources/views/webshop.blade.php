@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <br>
    <div class="row">
        <div class="col">
            <h1>Webshop</h1>
        </div>
    </div>
    <br> --}}
    <div class="row">

        @foreach ($products as $product)
            <div class="col ">
                <div class="card product" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$product->productnaam}}</h5>
                    <p class="card-text">{{$product->productomschrijving}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
