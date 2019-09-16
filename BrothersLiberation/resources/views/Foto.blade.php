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
            <a href="/newcomment/{{$foto->fotoid}}">
                <button class="btn btn-secondary">Nieuwe comment</button>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            @foreach ($comments as $comment)
                @if($user = Auth::user())
                    <a href="/comments/{{ $comment->commentid }}" class="commentlink">
                        <div class="row align comment">
                            <div class="col">{{ $comment->comment }}</div>
                            <div class="col">{{ $comment->fotoid }}</div>
                            <div class="col">{{ $comment->userid }}</div>
                        </div>
                    </a>
                @else
                    <div class="row align lid">
                        <div class="col">{{ $comment->comment }}</div>
                        <div class="col">{{ $comment->fotoid }}</div>
                        <div class="col">{{ $comment->userid }}</div>
                    </div>
                @endif
                <br>
            @endforeach
        </div>
    </div>
    <br>
</div>
@endsection
