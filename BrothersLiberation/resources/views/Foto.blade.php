@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <img src="{{ asset($foto->fotoname) }}" alt="{{$foto->fotoid}}" height="200" width="350" onerror=this.src="{{ url('/img/img-placeholder.png') }}">
        </div>
        <div class="col">
            <h3>Omschrijving:</h3>
            <p>{{$foto->Omschrijving}}</p>
        </div>
        <div class="col"></div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <h3>Comments:</h3>
        </div>
        <div class="col" style="text-align:right">
            @if($user = Auth::user())
                <a href="/newcomment/{{$foto->fotoid}}">
                    <button class="btn btn-secondary">Nieuwe comment</button>
                </a>
            @else
                <a href="/login">
                    <button class="btn btn-secondary">Nieuwe comment</button>
                </a>
            @endif
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            @foreach ($comments as $comment)
                @if($user = Auth::user())
                    <a href="/comments/{{ $comment->commentid }}" class="commentlink">
                        <div class="row align comment"> 
                            <div class="col"><p>{{ $comment->username }}</p></div>
                            <div class="col-10">{{ $comment->comment }}</div>
                        </div>
                    </a>
                @else
                    <div class="row align comment">
                        <div class="col"><p>{{ $comment->username }}</></div>
                        <div class="col-10">{{ $comment->comment }}</div>
                    </div>
                @endif
                <br>
            @endforeach
        </div>
    </div>
    <br>
</div>
@endsection
