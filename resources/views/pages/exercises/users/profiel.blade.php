@extends('base')

@section('content')
    <div class="container">
        <div class="main-title">MIJN OPDRACHTEN</div>
        <div class="exercise-table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Naam</th>
                    <th scope="col">Klus</th>
                    <th scope="col">Aantal inzendingen</th>
                    <th scope="col">Tijd</th>
                </tr>
                </thead>
                <tbody>
                @foreach($exercises as $exercise)
                    <tr>
                        <td><span><a href="{{ route('exercise.show', $exercise->id) }}">{{ $exercise->name }}</span></a><p>{{ $exercise->description }}</p></td>
                        <td>{{ $exercise->job->name }}</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
