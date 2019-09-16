@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h3>Comment: {{$comment->commentid}}</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <form action="/updatecomment" method="post">
                {{ csrf_field() }}
                <input value="{{$comment->comment}}"/>
            </form>
        </div>
    </div>
</div>
@endsection
