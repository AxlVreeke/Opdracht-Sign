@extends('base')

@section('content')
    <div class="container">
        <ul class="ul-title">
            <li style=" color: #000000; text-transform: uppercase;">{{$exercise->name}}</li>
        </ul>
        <hr>
        <div class="show-wrapper">
            <div class="show-info">
                <div class="show-title">
                    <h4><b>Opdracht gegevens</b></h4>
                </div>
                <p><b>Opdrachtgever:</b> {{$exercise->user->name}}</p>
                <p><b>Categorie:</b> {{$exercise->job->name}}</p>
                <p><b>Formaat:</b> {{$exercise->working_method}}</p>
                <p><b>Aantal:</b> {{$exercise->number}}</p>
                <p><b>Bestand:</b> <img src="{{asset('storage/user-img/'.$exercise->file)}}" alt="uw foto"></p>
            </div>
            <div class="show-title">
                <h4><b>Beschrijving:</b></h4>
                {{$exercise->description}}
            </div>
        </div>

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
    </div>


@endsection