@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h3>Agenda</h3>
        </div>
        <div class="col">
        </div>
        <div class="col" style="text-align:right">
            @if($user = Auth::user())
                <a href="/nieuweactiviteit">
                    <button class="btn btn-secondary">Voeg activiteit toe</button>
                </a>
            @endif
        </div>
    </div>
    <br>
    <div class="row filters">
        <div class="col">
            <select class="form-control" onchange="window.location=this.options[this.selectedIndex].value">
                <option disabled selected hidden>Maanden:</option>
                <option class="form-control" value="/agenda/filter/1">Januari</option>
                <option class="form-control" value="/agenda/filter/2">Februari</option>
                <option class="form-control" value="/agenda/filter/3">Maart</option>
                <option class="form-control" value="/agenda/filter/4">April</option>
                <option class="form-control" value="/agenda/filter/5">Mei</option>
                <option class="form-control" value="/agenda/filter/6">Juni</option>
                <option class="form-control" value="/agenda/filter/7">Juli</option>
                <option class="form-control" value="/agenda/filter/8">Augustus</option>
                <option class="form-control" value="/agenda/filter/9">September</option>
                <option class="form-control" value="/agenda/filter/10">Oktober</option>
                <option class="form-control" value="/agenda/filter/11">November</option>
                <option class="form-control" value="/agenda/filter/12">December</option>
                <option class="form-control" value="/agenda">Alle gebeurtenissen</option>

            </select>        
        </div>
        <div class="col">
            <form action='/agenda/date' method='GET'> 
                {{-- @method('get') --}}
                {{ csrf_field() }}
                <input type='date' class="form-control" onchange="this.form.submit()" name="date"/>
            </form>
        </div>
        <div class="col" >
        </div>
    </div>
    <br>
    <div class="row">
        @if (count($activiteiten) > 0)
            @foreach ($activiteiten as $act)
                <div class="col-4">
                    <div class="card product">
                        <img src="img/img-placeholder.png" class="card-img-top">
                        <div class="card-body">
                        <h5 class="card-title">{{$act->omschrijving}}</h5>
                        <p class="card-text">{{$act->starttijd}}  -  {{$act->eindtijd}}</p>
                        <p class="card-text">{{$act->startdatum}}  -  {{$act->einddatum}}</p>
                        @if($user = Auth::user())
                            <a href="/delete/act/{{$act->id}}"><img src="/img/delete.jpg" height="30px" width="30px"></a>
                        @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h3 style="margin-top:50px">Er zijn geen gebeurtenissen gevonden</h3>
        @endif
       
    </div>
    
</div>
<script type="text/javascript">
      $('#date1').change(function(){
        console.log('Submiting form');                
        $('#form1').submit();
      });
</script>
@endsection
