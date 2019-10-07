@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    @if (Auth::user())
        @foreach ($leden as $lid)
            <a href="/editmember/{{ $lid->id }}">
                <div class="row align lid">
                    <div class="col-2">
                            <img class="lidimg" src="{{$lid->userimage}}" height="70px" width="120px">
                    </div>
                    <div  style="margin-top:10px;" class="col-2"><h5>{{ $lid->name }}</h5></div>
                    <div style="margin-top:10px;" class="col-2">{{ $lid->Bijnamen }}</div>
                    <div style="margin-top:10px;" class="col-2">{{ $lid->email }}</div>
                    <div style="margin-top:10px;" class="col">{{ $lid->Omschrijving }}</div>
                </div>
            </a>
            <br>
        @endforeach
    @else
        @foreach ($leden as $lid)
            <div class="row align lid">
                <div class="col-2">
                    <img class="lidimg" src="{{$lid->userimage}}" height="70px" width="120px">
                </div>
                <div  style="margin-top:10px;" class="col-2"><h5>{{ $lid->name }}</h5></div>
                <div style="margin-top:10px;" class="col-2">{{ $lid->Bijnamen }}</div>
                <div style="margin-top:10px;" class="col-2">{{ $lid->email }}</div>
                <div style="margin-top:10px;" class="col">{{ $lid->Omschrijving }}</div>
            </div>
            <br>
        @endforeach
    @endif

</div>
@endsection
