@extends('base')

@section('content')
    <div class="container">
        <div class="main-title">OPDRACHTEN</div>
        <form id="report-page-form-form" action="{{route('filter-opdracht')}}">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Categorie:</label>
            <select name="category" class="form-select" id="inputGroupSelect01">
                <option selected value="0">Kies...</option>
                <option value="1">Raambelettering</option>
                <option value="2">Autobelettering</option>
                <option value="3">Spandoek</option>
                <option value="4">Kledingbedrukking / Caps</option>
                <option value="5">Interieurwrap</option>
                <option value="6">Vloerstickers</option>
                <option value="7">Stickers</option>
                <option value="8">Lichtbak</option>
                <option value="9">Graveren op Hout / Acrylaat / Glazen</option>
                <option value="9">Anders</option>
            </select>
            <button style="padding: 0px 25px"  type="submit" class="btn btn-secondary navy">Filter</button>
        </div>
        </form>

        @hasanyrole('opdrachtgever|admin')
        <a style="margin-bottom: 20px" href="{{route('exercises.create')}}" class="btn btn-primary">Nieuwe opdracht aanmaken</a>
        @endhasanyrole
        <div class="exercise-table">
            <table class="table table-striped">
                <thead>
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
    </div>

@endsection
