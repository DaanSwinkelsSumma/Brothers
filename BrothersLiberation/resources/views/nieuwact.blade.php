@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <h5>Gebeurtenis toevoegen</h5>
        </div>
        <div class="col" >

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="" method="post">
                {{ csrf_field() }}
                <input type="text" name="datum" class="form-control">

                <textarea type="text" name="omschrijving" class="form-control"  rows="8" cols="10"></textarea><br>
                <input type="submit" value="Plaatsen" class="btn btn-secondary">
            </form>
        </div>
        <div class="col"></div>
    </div>
    
    
</div>
@endsection
