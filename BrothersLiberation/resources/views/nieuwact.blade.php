@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <h3>Gebeurtenis toevoegen</h3>
        </div>
        <div class="col" >

        </div>
    </div>
    <br>
    <form action="/storeact" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col"></div>
            <div class="col-4">
                <h5>Begin datum:</h5>
                <input type="date" name="startdatum" class="form-control">
                <br>
                <h5>Eind datum:</h5>
                <input type="date" name="einddatum" class="form-control">
                <br>
                <h5>Begin tijd:</h5>
                <input type="time" name="starttijd" class="form-control">
                <br>
                <h5>Eind tijd:</h5>
                <input type="time" name="eindtijd" class="form-control">
            </div>
            <div class="col-1"></div>
            <div class="col-4">
                <h5>Omschrijving:</h5>
                <textarea type="text" name="omschrijving" class="form-control"  rows="8" cols="10"></textarea><br>
                <input type="submit" value="Plaatsen" class="btn btn-secondary">
            </div>
            <div class="col"></div>
        </div>
    </form>
</div>
@endsection
