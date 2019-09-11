@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h2>Nieuw lid</h2>
        </div>
        <div class="col"></div>
    </div>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="/adduser" method="POST">
                @method('POST')
                {{ csrf_field() }}
                <label>Gebruikersnaam:</label>
                <input type="text" name="name" class="form-control" required>
                <label>Bijnaam:</label>
                <input type="text" name="Bijnamen" class="form-control" required>
                <label>email:</label>
                <input type="text" name="email" class="form-control"  required>
                <label>Omschrijving:</label>
                <input type="text" name="Omschrijving" class="form-control" style="heigt:100px">
                <label>Wachtwoord:</label>
                <input type="password" name="password" class="form-control"  required>
                <br>
                <input type="submit" value="Toevoegen" class="btn btn-secondary">
            </form>
            
        </div>
        <div class="col"></div>

    </div>
    
    
</div>
@endsection

