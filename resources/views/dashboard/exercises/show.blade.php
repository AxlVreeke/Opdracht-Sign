@extends('base')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <h2>Opdracht detailpagina</h2>
        <hr>
        <h3>{{$exercise->name}}</h3>
        <p><b>Beschrijving:</b> {{$exercise->description}}</p>
        <p><b>Klus:</b> {{$exercise->job->name}}</p>
        <p><b>Formaat:</b> {{$exercise->working_method}}</p>
        <p><b>Aantal:</b> {{$exercise->number}}</p>
        <p><b>Opdrachtgever:</b> {{$exercise->user->name}}</p>
        <p><b>Bestand:</b> {{$exercise->file}}</p>

        <div class="buttons">
            <a href="{{route('exercises.edit', $exercise->id)}}" class="btn btn-info">Aanpassen</a>
            <form action="{{route('exercises.destroy', $exercise->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Verwijderen" class="btn btn-danger">
            </form>
        </div>
    </div>


@endsection
