@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
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
                    <h5>Webshop </h5>
                    <a href="/nieuwlid">
                        <input type="submit" class="btn btn-secondary" value="Voeg nieuwe leden toe">
                        
                    </a>
                    {{-- Webshop aan en uit zetten --}}
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
