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
                <textarea type="text" name="comment" class="form-control"  rows="8" cols="10">{{$comment->comment}}</textarea><br>
            </form>
        </div>
    </div>
</div>
@endsection
