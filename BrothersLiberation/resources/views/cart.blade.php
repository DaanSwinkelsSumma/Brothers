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
            @if(session('cart'))
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
                        @foreach(session('cart') as $id => $details)
                            <tr>
                                <th>{{ $details['naam'] }}</th>
                                <td>{{ $details['aantal'] }}</td>
                                <td>€ {{ $details['prijs'] }}</td>
                                <td><a href="/removeitem/{{$id}}"> <img src="/img/delete.jpg" height="30px" width="30px"></a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <a href="/order"><button class="btn btn-secondary">Bestellen</button></a> &nbsp;&nbsp;
                <a href="/clearcart"><button class="btn btn-secondary">Winkewagen legen</button></a>
            @else 
                <br>
                <h5>Geen producten toegevoegd aan winkelwagen</h5>
            @endif
        </div>
    </div>
</div>
@endsection
