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
                @else
                    @if(auth()->user() == ($exercise->user))
                        <p><b>Inschrijving:</b><span>Je kan niet inschrijven op je eigen opdracht.</p></span>
                    @else
                        <p><b>Inschrijving:</b><span>Niet Ingeschreven</p></span>
                        <div class="show-assign-button-wrapper">
                            <form  action={{route('participate.store')}} method="POST">
                                @csrf
                                <input type="hidden" name="exercise_id" value="{{$exercise->id}}">
                                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                <input class="btn show-assign-button" type="submit" value="Inschrijven">
                            </form>
                        </div>
                    @endif
                @endif
            </div>
            <div class="show-title">
                <h4><b>Beschrijving:</b></h4>
                {{$exercise->description}}
            </div>
        </div>

        <div style="margin-top: 30px" class="show-title">
            <h4><b>Bestand:</b></h4>
            <span> <img style="width: 370px; max-height: 800px; height: auto; margin-top: 10px;" src="{{asset('storage/user-img/'.$exercise->file)}}" width="70px" height="70px" alt="Uw foto"></span>
        </div>
    </div>

    @if(auth()->user() == $exercise->user or auth()->user()->hasRole('admin'))
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
    @endif

    @if(auth()->user()->hasRole('admin') ||  $exercise->user_id == auth()->user()->id)
        <div style="padding: 25px 25px" class="participants">
            <div class="container">
                <div class="main-title">INGELEVERDE OPDRACHTEN</div>
                <div class="exercise-table">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Informatie</th>
                            <th scope="col">Ingeleverd Door</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($exercise->giveexercises as $giveexercise)
                            <tr>
                                <td><a href="{{ route('giveexercises.show', $giveexercise->id) }}">{{ $giveexercise->description }}</a></td>
                                <td>{{ $giveexercise->user->name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

@endsection
