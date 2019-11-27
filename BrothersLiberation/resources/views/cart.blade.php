@extends('layouts.app')

@section('content')

<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h3>Winkelwagen</h3>
        </div>
        <div class="col">

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Productnaam</th>
                        <th scope="col">Aantal</th>
                        <th scope="col">Prijs</th>
                        <th scope="col">Actie</th>
                    </tr>
                </thead>
                <tbody>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)

                            <tr>
                                <th>{{ $details['naam'] }}</th>
                                <td>{{ $details['aantal'] }}</td>
                                <td>€ {{ $details['prijs'] }}</td>
                                <td>X</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <br>
            <a href="/order"><button class="btn btn-secondary">Bestellen</button></a>
        </div>
    </div>
</div>
@endsection
