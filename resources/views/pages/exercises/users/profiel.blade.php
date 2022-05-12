@extends('base')

@section('content')
    <div class="container">
        <div class="main-title">MIJN OPDRACHTEN</div>
        <div class="exercise-table">
            <table class="table table-striped">
                <thead style="background-color: #78034a">
                <tr>
                    <th scope="col">Naam</th>
                    <th scope="col">Klus</th>
                    <th style="min-width: 200px" scope="col">Aantal inzendingen</th>
                    <th style="min-width: 150px" scope="col">Eind Datum</th>
                </tr>
                </thead>
                <tbody>
                @foreach($exercises as $exercise)
                    <tr>
                        <td><span><a href="{{ route('exercise.show', $exercise->id) }}">{{ $exercise->name }}</span></a><p>{{ $exercise->description }}</p></td>
                        <td>{{ $exercise->job->name }}</td>
                        <td>{{ $exercise->entries }}</td>
                        <td>{{ $exercise->end_date }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="main-title">INGESCHREVEN OPDRACHTEN</div>
        @if(auth()->user()->assignedToExercise($exercise->id))
            <div class="exercise-table">
                <table class="table table-striped">
                    <thead style="background-color: #78034a">
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Klus</th>
                        <th style="min-width: 200px" scope="col">Aantal inzendingen</th>
                        <th style="min-width: 150px" scope="col">Eind Datum</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($exercises as $exercise)
                        <tr>
                            <td><span><a href="{{ route('exercises.show', $exercise->id) }}">{{ $exercise->name }}</span></a><p>{{ $exercise->description }}</p></td>
                            <td>{{ $exercise->job->name }}</td>
                            <td>{{ $exercise->entries }}</td>
                            <td>{{ $exercise->end_date }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>Je hebt je nog niet ingeschreven voor een opdracht.</p>
        @endif
    </div>
@endsection
