@extends('base')

@section('content')
    <div class="container">
        @hasexactroles('user')
        @else
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
                    @forelse($exercises as $exercise)
                        <tr>
                            <td><span><a href="{{ route('exercise.show', $exercise->id) }}">{{ $exercise->name }}</span></a><p>{{ $exercise->description }}</p></td>
                            <td>{{ $exercise->job->name }}</td>
                            <td>{{ $exercise->entries }}</td>
                            <td>{{ $exercise->end_date }}</td>
                        </tr>
                    @empty
                        <p>Je hebt nog geen opdrachten aangemaakt.</p>
                        <style>thead{display: none;}</style>
                    @endforelse
                    </tbody>
                </table>
            </div>
            @endhasexactroles

            <div class="main-title">MIJN INZENDINGEN</div>
            <div class="exercise-table">
                <table class="table table-striped">
                    <thead style="background-color: #78034a">
                    <tr>
                        <th scope="col">Opdrachtnaam</th>
                        <th scope="col">Informatie</th>
                        <th scope="col">Klus</th>
                        <th style="min-width: 200px" scope="col">Aantal inzendingen</th>
                        <th style="min-width: 150px" scope="col">Eind Datum</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($user->giveexercises as $exercise)
                        <tr>
                            <td><span><a href="{{ route('exercise.show', $exercise->id) }}">{{ $exercise->exercise->name }}</span></a><p>{{ $exercise->exercise->description }}</p></td>
                            <td>{{ $exercise->description }}</td>
                            <td>{{ $exercise->exercise->job->name}}</td>
                            <td>{{ $exercise->exercise->entries}}</td>
                            <td>{{ $exercise->exercise->end_date }}</td>
                        </tr>
                        @empty
                        <p>Je hebt nog geen opdrachten aangemaakt.</p>
                        <style>thead{display: none;}</style>
                    @endforelse
                    </tbody>
                </table>
            </div>
    </div>
@endsection
