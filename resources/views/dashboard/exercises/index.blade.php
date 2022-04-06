@extends('base')

@section('content')
<div class="container">
    <ul class="ul-title">
        <li>OPDRACHTEN</li>
    </ul>
    <form action="{{route('filter-opdracht')}}">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Categorie:</label>
            <select name="category" class="form-select" id="inputGroupSelect01">
                <option selected>Kies...</option>
                <option value="1">Raambelettering</option>
                <option value="2">Autobelettering</option>
                <option value="3">Spandoek</option>
                <option value="4">Kledingbedrukking / Caps</option>
                <option value="5">Interieurwrap</option>
                <option value="6">Vloerstickers</option>
                <option value="7">Stickers</option>
                <option value="8">Lichtbak</option>
                <option value="9">Graveren op Hout / Acrylaat / Glazen</option>
            </select>
            <button style="padding: 0px 25px" type="submit" class="btn btn-secondary navy">Filter</button>
        </div>
    </form>
    <a href="{{route('exercises.create')}}" class="btn btn-primary">Nieuw opdracht aanmaken</a>


    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naam <></th>
            <th scope="col">Klus <></th>
            <th scope="col">Opdrachtgever <></th>
        </tr>
        </thead>
        <tbody>
        @foreach($exercises as $exercise)
            <tr>
                <td>{{ $exercise->id }}</td>
                <td class="table-dark"><a href="{{ route('exercises.show', $exercise->id) }}">{{ $exercise->name }}</a></td>
                <td>{{ $exercise->job->name }}</td>
                <td>{{ $exercise->user->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
