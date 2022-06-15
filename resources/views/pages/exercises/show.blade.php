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

    @if(auth()->user()->assignedToExercise($exercise->id))
        @include('pages.exercises.participate')
    @endif


    @if(auth()->user()->hasRole('admin') ||  $exercise->user_id == auth()->user()->id)
        <div style="padding: 25px 25px" class="participants">
            <div class="container">
                <div class="show-title-icon">
                    <div class="main-title" style="font-size: 1.37rem">INGELEVERDE OPDRACHTEN: </div>
                    <div class="main-title"><i style="font-size: x-large; cursor: pointer;" class="fa fa-solid fa-folder-open" id="showElement"></i></div>
                </div>
                <div class="exercise-table" id="tableHide">
                    <table class="table sortable table-striped">
                        <thead>
                        <tr>
                            <th style="min-width: 220px; max-width: 220px" scope="col">Ingeleverd door</th>
                            <th style="min-width: 400px" scope="col">Informatie</th>
                            <th style="width: 200px" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($exercise->giveexercises as $giveexercise)
                            <tr>
                                <td>{{ $giveexercise->user->name }}</td>
                                <td>{{ $giveexercise->description }}</a></td>
                                <td>
                                    <div style="max-width: 200px;" class="show-assign-button-wrapper">
                                        <a class="btn show-assign-button" href="{{ route('giveexercises.show', $giveexercise->id) }}" role="button">Meer info</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-wrapper"  id="cardWrapper">
                    @foreach($exercise->giveexercises as $giveexercise)
                        <div class="card">
                            <span> <img class="card-img-top" src="{{asset('storage/user-img/'.$giveexercise->file)}}" alt="Uw foto"></span>
                            <div class="card-body">
                                <h5 class="card-title"><b>Gemaakt door:</b> {{ $giveexercise->user->name }}</h5>
                                <p><b>Informatie:</b> {{ $giveexercise->description }}</p>
                                <div style="justify-content: flex-start; align-items: flex-end;" class="show-assign-button-wrapper">
                                    <a class="btn show-assign-button" href="{{ route('giveexercises.show', $giveexercise->id) }}" role="button">Meer info</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

@endsection
