@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h3>Agenda</h3>
        </div>
        <div class="col">
        </div>
        <div class="col" style="text-align:right">
            <a href="/nieuweactiviteit">
                <button class="btn btn-secondary">Voeg activiteit toe</button>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">Datum</th>
                    <th scope="col">Start tijd</th>
                    <th scope="col">Eind tijd</th>
                    <th scope="col">Omschrijving</th>
                    </tr>
                </thead>
                <tbody>       
                    @foreach ($activiteiten as $act)
                        <tr>
                            <th>{{ $act->datum }}</th>
                            <th>{{ $act->starttijd }}</th>
                            <th>{{ $act->eindtijd }}</th>
                            <th>{{ $act->omschrijving }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@endsection
