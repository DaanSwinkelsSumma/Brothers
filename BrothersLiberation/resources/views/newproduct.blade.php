@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <form action="/storeproduct" method="POST">
        {{ csrf_field() }}
        
        <br>
        <div class="row">
            <div class="col">
                <img src="/img/img-placeholder.png" >
            </div>
            <div class="col">
                <h4>Productnaam:</h4>
                <input type="text" name="name" class="form-control">
                <h4>Categorie:</h4>
                <input type="text" name="categorie" class="form-control">
                <h4>Prijs:</h4>
                <input type="text" name="prijs" class="form-control">
                <h4>Omschrijving:</h4>
                <textarea type="text" name="omschrijving" class="form-control"  rows="4" cols="10"></textarea><br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-primary" value="Toevoegen">
            </div>
        </div>
    </form>

    
</div>
@endsection
