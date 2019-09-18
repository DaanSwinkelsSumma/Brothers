@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3>New comment:</h3>
        </div>
        <div class="col"></div>
    </div>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="/addcomment/{{$foto->fotoid}}" method="post">
                {{ csrf_field() }}
                <textarea type="text" name="comment" class="form-control"  rows="8" cols="10"></textarea><br>
                <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                <input type="submit" value="Plaatsen" class="btn btn-secondary">
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection
