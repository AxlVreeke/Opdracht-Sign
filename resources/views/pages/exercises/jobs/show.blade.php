@extends('base')

@section('content')
    <div class="container">
        <div class="main-title">{{$giveexercise->exercise->name}} - {{$giveexercise->user->name}}</div>
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
            <span><img class="show-file" src="{{asset('storage/user-img/'.$giveexercise->file)}}" width="70px" height="70px" alt="Uw foto"></span>
        </div>
        <hr>

        <div class="show-title">
            <h4><b>Commentaar:</b></h4>
            <div style="padding-top: 5px; margin-bottom: 30px; position: relative;">
                <textarea name="comment" class="form-control" id="comment" maxlength="255" placeholder="vul hier uw commentaar in" cols="30" rows="10"></textarea>
                <div style="right: 10px;" id="count" class="char-amount">255</div>
            </div>
        </div>

        <div class="jobs-button-flex">
            <div class="show-assign-button-wrapper">
                @if($previous)
                    <a class="btn show-assign-button" href="{{ URL::to( 'exercises/giveexercises/' . $previous->id ) }}" role="button">Previous</a>
                @endif
            </div>
            <div class="show-assign-button-wrapper">
                @if($next)
                    <a class="btn show-assign-button" href="{{ URL::to( 'exercises/giveexercises/' . $next->id ) }}" role="button">Next</a>
                @endif
            </div>
        </div>
        <div class="show-button-edit">
            <form style="display: flex; justify-content: center;" action="{{route('giveexercises.destroy', $giveexercise->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Verwijderen" class="btn btn-danger">
            </form>
        </div>
    </div>

    <script src="{{asset('/js/char-countdown.js')}}"></script>
    <script src="{{asset('/js/max-date.js')}}"></script>
@endsection
