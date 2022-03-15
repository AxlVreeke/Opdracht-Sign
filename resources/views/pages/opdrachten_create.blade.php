@extends('base')

@section('content')
<div class="container">
    <h1>Maak een opdracht aan!</h1>

    <div class="input-group mb-3" class="input_create_opdr">
    <span class="input-group-text" id="inputGroup-sizing-default">Opdracht Naam:</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>


    <div class="input-group mb-3" class="input_create_opdr">
    <span class="input-group-text" id="inputGroup-sizing-default">Opdracht omschrijving:</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Klant:</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Student:</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Werkwijzer:</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Klus:</label>
    <select class="form-select" id="inputGroupSelect01">
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
    </div>


    <div class="input-group mb-3" class="input_create_opdr">
    <span class="input-group-text" id="inputGroup-sizing-default">Formaat:</span>
    <input type="number" class="form-control" placeholder="0.0" step="0.01" min="0" max="10000000">
    </div>


    <div class="input-group mb-3" class="input_create_opdr">
    <span class="input-group-text" id="inputGroup-sizing-default">Aantallen:</span>
    <input type="number" class="form-control" placeholder="0" step="1" min="1" max="10000000">
    </div>


    <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupFile01">Upload bestand:</label>
    <input type="file" class="form-control" id="inputGroupFile01">
    </div>


    <a href="{{route('opdrachten')}}">
    <input class="btn btn-primary" type="submit" value="Maak aan!"/>
    </a>
</div>
@endsection