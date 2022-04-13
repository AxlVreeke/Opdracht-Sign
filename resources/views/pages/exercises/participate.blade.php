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
                <p><b>Formaat:</b><span>{{$exercise->working_method}}</p></span>
                <p><b>Aantal:</b><span>{{$exercise->number}}</p></span>
                <p><b>Bestand:</b><span> <img src="{{asset('storage/user-img/'.$exercise->file)}}" alt="uw foto"></p></span>
                <div class="show-info-button">
                    <a class="btn btn-secondary" href="{{route('exercises.edit', $exercise->id)}}" role="button">Neem deel</a>
                </div>
            </div>
            <div class="show-description">
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
