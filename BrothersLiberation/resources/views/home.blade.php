@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <div class="card homebody">
                <div class="card-header">Dashboard</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Welkom</h5>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a href="/nieuwlid">
                        <input type="submit" class="btn btn-secondary" value="Voeg nieuwe leden toe">
                        
                    </a>
                    <br>
                    <br>
                    {{-- Webshop aan en uit zetten --}}
                    <h5>Webshop </h5>
                    @if ($status == 'Aan')
                        <a href="/webshop_off">
                            <input type="submit" class="btn btn-danger" value="Zet webshop uit">
                        </a>
                    @else
                        <a href="/webshop_on">
                            <input type="submit" class="btn btn-success" value="Zet webshop aan">
                        </a>
                    @endif

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
