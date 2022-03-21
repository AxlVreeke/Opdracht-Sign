@extends('base')

@section('content')
<div class="container">
    <h1>Maak een opdracht aan!</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('exercises.store')}}" method="POST">
        @csrf
    <div class="input-group mb-3" class="input_create_opdr">
        <label for="name">Opdracht Naam:</label>
        <input type="text" name="name" id="name" placeholder="Naam Opdracht" class="form-control">
    </div>

    <div class="input-group mb-3" class="input_create_opdr">
        <label for="description">Omschrijving:</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <div class="input-group mb-3">
        <label for="customer">Klant:</label>
        <input type="text" name="customer" id="customer" placeholder="Klant Naam" class="form-control">
    </div>

    <div class="input-group mb-3">
        <label for="student">Student:</label>
        <input type="text" name="student" id="student" placeholder="Student Naam" class="form-control">
    </div>

    <div class="input-group mb-3">
        <label for="working_method">Werkwijzer:</label>
        <input type="text" name="working_method" id="working_method" placeholder="Werkwijzer" class="form-control">
    </div>

    <div class="input-group mb-3">
        <label for="job">Klus:</label>
        <select class="form-select" name="job" id="job">
            <option selected>Kies...</option>
            <option value="Raambelettering" name="job" id="job">Raambelettering</option>
            <option value="Autobelettering" name="job" id="job">Autobelettering</option>
            <option value="Spandoek" name="job" id="job">Spandoek</option>
            <option value="Kledingbedrukking / Caps" name="job" id="job">Kledingbedrukking / Caps</option>
            <option value="Interieurwrap" name="job" id="job">Interieurwrap</option>
            <option value="Vloerstickers" name="job" id="job">Vloerstickers</option>
            <option value="Stickers" name="job" id="job">Stickers</option>
            <option value="Lichtbak" name="job" id="job">Lichtbak</option>
            <option value="Graveren op Hout / Acrylaat / Glazen" name="job" id="job">Graveren op Hout / Acrylaat / Glazen</option>
        </select>
    </div>


    <div class="input-group mb-3" class="input_create_opdr">
        <label for="formaat">Formaat:</label>
        <input type="number" name="formaat" id="formaat" placeholder="0.0" class="form-control">
    </div>


    <div class="input-group mb-3" class="input_create_opdr">
        <label for="number">Aantallen:</label>
        <input type="number" name="number" id="number" placeholder="0" class="form-control">
    </div>


    <div class="input-group mb-3">
        <label for="file">Upload Bestand:</label>
        <input type="file" name="file" id="file" class="form-control">
    </div>

        <div class="form-group">
            <input class="mt-4 btn btn-primary" type="submit" value="Opslaan">
        </div>
    </form>
</div>
@endsection
