@extends('base')

@section('content')
    <div class="container">
        <div class="main-title">{{$exercise->name}}</div>
        <hr>
        <div class="show-wrapper">
            <div class="show-info">
                <div class="show-title">
                    <h4><b>Opdracht gegevens:</b></h4>
                </div>
                <p><b>Opdrachtgever:</b><span>{{$exercise->user->name}}</p></span>
                <p><b>Categorie:</b><span>{{$exercise->job->name}}</p></span>
                <p><b>Aantal:</b><span>{{$exercise->number}}</p></span>


                @if(auth()->user()->assignedToExercise($exercise->id))
                    <p><b>Inschrijving:</b><span>Je bent ingeschreven</p></span>
                <div class="show-info-button-wrapper">
                    <a class="btn show-info-button" href="{{route('exercises.participate', $exercise->id)}}" role="button">Neem deel</a>
                </div>
                @else
                    <p><b>Inschrijving:</b><span>Niet Ingeschreven</p></span>
                    <div class="show-info-button-wrapper">
                        <form  action={{route('participate.store')}} method="POST">
                            @csrf
                            <input type="hidden" name="exercise_id" value="{{$exercise->id}}">
                            <input type="hidden" name="user_id" value="{{Auth::id()}}">
                            <input class="btn show-info-button" type="submit" value="inschrijven">
                        </form>
                    </div>
                @endif
            </div>
            <div class="show-title">
                <h4><b>Beschrijving:</b></h4>
                {{$exercise->description}}
            </div>
        </div>


        <div style="margin-top: 30px" class="show-title">
            <h4><b>Bestand:</b></h4>
            <span> <img style="width: 400px; max-height: 800px; height: auto; margin-top: 10px;" src="{{asset('storage/user-img/'.$exercise->file)}}" width="70px" height="70px" alt="Uw foto"></span>
        </div>
    </div>
    @role('admin')
    <div class="show-button-wrapper">
        <div class="show-button">
            <a class="btn btn-secondary navy" href="{{route('exercises.edit', $exercise->id)}}" role="button">Aanpassen</a>
        </div>
        <div class="show-button">
            <form action="{{route('exercises.destroy', $exercise->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Verwijderen" class="btn btn-danger">
            </form>
        </div>
    </div>
    @endrole

@endsection
