@extends('base')

@section('content')
<div class="container">
    <h1>Opdrachten</h1>
    <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Categorie:</label>
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
    <a class="btn btn-primary" href="{{route('opdrachten_create')}}" role="button">Maak een opdracht!</a>
</div>
@endsection
