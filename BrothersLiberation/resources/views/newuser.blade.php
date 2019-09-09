@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Nieuw lid</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="" method="POST">
                {{ csrf_field() }}
                
            </form>

        </div>
    </div>
    
    
</div>
@endsection

