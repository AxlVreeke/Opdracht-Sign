@extends('base')

@section('content')
<div class="container">
    <ul class="ul-title">
        <li>OPDRACHT AANMAKEN</li>
    </ul>
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
{{--    <div class="input-group mb-3" class="input_create_opdr">--}}
{{--        <label for="name">Opdracht Naam:</label>--}}
{{--        <input type="text" name="name" id="name" placeholder="Naam Opdracht" class="form-control">--}}
{{--    </div>--}}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Opdracht Naam:</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Naam Opdracht" value="">
            </div>
        </div>
    <div class="input-group mb-3" class="input_create_opdr">
        <label for="description">Omschrijving:</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <div class="input-group mb-3">
        <label for="working_method">Werkwijzer:</label>
        <input type="text" name="working_method" id="working_method" placeholder="Werkwijzer" class="form-control">
    </div>

    <div class="input-group mb-3">
        <label for="job_id">Klus:</label>
        <select class="form-select" name="job_id" id="job_id">
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
