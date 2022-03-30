@extends('base')

@section('content')
    <div class="container">
        <h1>Pas een opdracht aan!</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{route('exercises.update', $exercise->id)}}">
            @csrf
            @method("PUT")
            <div class="input-group mb-3" class="input_create_opdr">
                <label for="name">Opdracht Naam:</label>
                <input type="text" name="name" id="name" value="{{$exercise->name}}" class="form-control">
            </div>

            <div class="input-group mb-3" class="input_create_opdr">
                <label for="description">Omschrijving:</label>
                <textarea name="description" id="description" cols="30" rows="10">{{$exercise->description}}</textarea>
            </div>

            <div class="input-group mb-3">
                <label for="working_method">Werkwijzer:</label>
                <input type="text" name="working_method" id="working_method" value="{{$exercise->working_method}}" class="form-control">
            </div>

            <div class="input-group mb-3">
                <label for="job_id">Klus:</label>
                <select class="form-select" name="job_id" id="job_id">
                    <option selected>{{$exercise->job->name}}</option>
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
                <input type="number" name="formaat" id="formaat" value="{{$exercise->formaat}}" class="form-control">
            </div>


            <div class="input-group mb-3" class="input_create_opdr">
                <label for="number">Aantallen:</label>
                <input type="number" name="number" id="number" value="{{$exercise->number}}" class="form-control">
            </div>


            <div class="input-group mb-3">
                <label for="file">Upload Bestand:</label>
                <input type="file" name="file" id="file" value="{{$exercise->file}}" class="form-control">
            </div>

            <div class="form-group">
                <input class="mt-4 btn btn-primary" type="submit" value="Updaten">
            </div>
        </form>
    </div>
@endsection
