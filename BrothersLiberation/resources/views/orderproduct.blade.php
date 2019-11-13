@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <form action="/email" method="GET">
        {{ csrf_field() }}
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <input type="hidden" name="productname" value="{{$product->productnaam}}">
                <h3>{{$product->productnaam}}</h3><br>
                <h5>Mail adres:</h5>
                <input type="email" name="mailadres" class="form-control">
                <br>
                <h5>Aantal van dit product:</h5>
                @if (isset($error))
                    <h6 style="color:red">Vul een aantal in</h6>
                @endif
                <input type="number" name="aantal" class="form-control">
                <br>
                <h5>Bericht:</h5>
                <textarea type="text" name="mailbody" class="form-control"  rows="8" cols="10"></textarea>
                <br><br>
                <input type="submit" class="btn btn-primary" value="Verzenden">
            </div>
            <div class="col"></div>
        </div>
    </form>

    
</div>
@endsection
