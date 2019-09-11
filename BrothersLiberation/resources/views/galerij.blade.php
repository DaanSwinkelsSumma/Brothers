@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h3>Galerij</h3>
        </div>
    </div>
    <br>
    @foreach ($fotos as $foto)
        <a href="/galerij/{{$foto->fotoid}}">
            <div class="row">
                <div class="col">
                    <img src="{{ asset($foto->fotoname) }}" alt="{{$foto->fotoid}}" height="200" width="350" onerror=this.src="{{ url('/img/img-placeholder.png') }}">
                </div>
                <div class="col">
                    <h3>Galerij</h3>
                </div>
                <div class="col"></div>
            </div>
        </a>
        <br>
    @endforeach
</div>
@endsection
