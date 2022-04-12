@extends('base')

@section('content')
<div class="container">
    <div class="main-title">OPDRACHT AANMAKEN</div>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('exercises.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Opdracht Naam:</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="vul hier de opdracht naam in" value="">
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Beschrijving:</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description" placeholder="vul hier de beschrijving in" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="working_method" class="col-sm-2 col-form-label">Werkwijzer:</label>
            <div class="col-sm-10">
                <input type="text" name="working_method" class="form-control" id="working_method" placeholder="vul hier de werkwijzer in" value="">
            </div>
        </div>

        <div class="form-group row">
            <label for="job_id" class="col-sm-2 col-form-label">Klus:</label>
            <div class="col-sm-10">
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
        </div>

        <div class="form-group row">
            <label for="formaat" class="col-sm-2 col-form-label">Formaat:</label>
            <div class="col-sm-10">
                <input type="number" name="formaat" class="form-control" id="working_method" placeholder="vul hier het formaat in" value="">
            </div>
        </div>

        <div class="form-group row">
            <label for="number" class="col-sm-2 col-form-label">Aantallen:</label>
            <div class="col-sm-10">
                <input type="number" name="number" class="form-control" id="number" placeholder="vul hier het aantal in" value="">
            </div>
        </div>

        <div class="form-group row">
            <label for="file" class="col-sm-2 col-form-label">Upload bestand:</label>
            <div class="col-sm-10">
                <input type="file" name="file" class="form-control" id="file" value="">
            </div>
        </div>

        <div class="form-group">
            <input class="mt-4 btn btn-primary" type="submit" value="Opslaan">
        </div>
    </form>
</div>
@endsection
