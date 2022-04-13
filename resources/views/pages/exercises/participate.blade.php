@extends('base')

@section('content')
    <div class="container">
        <div class="main-title">DEELNEMEN AAN {{$exercise->name}}</div>
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
                <label for="description" class="col-sm-2 col-form-label">Beschrijving:</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" placeholder="vul hier de beschrijving in" cols="30" rows="10"></textarea>
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
