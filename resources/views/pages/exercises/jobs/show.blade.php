@extends('base')

@section('content')
    <div class="container">
        <div class="main-title">{{$giveexercise->exercise->name}}</div>
        <hr>
        <div class="show-wrapper">
            <div class="show-info">
                <div class="show-title">
                    <h4><b>Ingeleverde opdracht gegevens:</b></h4>
                </div>
                <p><b>Ingeleverd door:</b><span>{{$giveexercise->user->name}}</p></span>
                <p><b>Gekozen opdracht:</b><span>{{$giveexercise->exercise->name}}</p></span>
            </div>
            <div class="show-title">
                <h4><b>Beschrijving:</b></h4>
                {{$giveexercise->description}}
            </div>
        </div>

        <div style="margin-top: 30px" class="show-title">
            <h4><b>Bestand:</b></h4>
            <span> <img style="width: 370px; max-height: 800px; height: auto; margin-top: 10px;" src="{{asset('storage/user-img/'.$giveexercise->file)}}" width="70px" height="70px" alt="Uw foto"></span>
        </div>
        <hr>
    </div>

@endsection
