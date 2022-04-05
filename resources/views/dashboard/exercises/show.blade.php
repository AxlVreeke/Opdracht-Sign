@extends('base')

@section('content')
    <div class="container">
        <div class="show-wrapper">
            <h2 style="padding-top: 20px"><b>{{$exercise->name}}</b></h2>
            <hr>
            <p><b>Opdrachtgever:</b> {{$exercise->user->name}}</p>
            <p><b>Categorie:</b> {{$exercise->job->name}}</p>
            <p><b>Formaat:</b> {{$exercise->working_method}}</p>
            <p><b>Aantal:</b> {{$exercise->number}}</p>
            <p><b>Bestand:</b> {{$exercise->file}}</p>
            <div class="show-description">
                <p><b>Beschrijving:</b> {{$exercise->description}}</p>
            </div>
        </div>

        <div class="show-button-wrapper">
            <div class="show-button">
                <a class="btn btn-secondary navy" href="{{route('exercises.edit', $exercise->id)}}" role="button">Aanpassen</a>
            </div>
            <form action="{{route('exercises.destroy', $exercise->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Verwijderen" class="btn btn-danger">
            </form>
        </div>
    </div>


@endsection
