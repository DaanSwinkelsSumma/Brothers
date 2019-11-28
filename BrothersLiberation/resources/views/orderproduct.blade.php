@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Productnaam</th>
                        <th scope="col">Aantal</th>
                        <th scope="col">Prijs</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products  as $id => $product)
                        <tr>
                            <th>{{ $product['naam'] }}</th>
                            <td>{{ $product['aantal'] }}</td>
                            <td>€ {{ $product['prijs'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form action="/email" method="GET">
        {{ csrf_field() }}
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <br>
                <h5>Mail adres:</h5>
                <input type="email" name="mailadres" class="form-control">
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
