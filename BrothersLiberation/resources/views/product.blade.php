@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h3>{{$product->productnaam}}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <img src="{{ $product->productimage }}" >
        </div>
        <div class="col"></div>

    </div>
</div>
@endsection
