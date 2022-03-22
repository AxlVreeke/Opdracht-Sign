@extends('base')

    @section('content')

        <div class="container">
            <h1>edit Veld {{$user->name}}</h1>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $errors)
                            <li>{{$errors}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.update', $user->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="form">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" value="1" name="admin_id">
                        <label class="form-check-label" for="title">Admin account</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" value="0" name="admin_id">
                        <label class="form-check-label" for="title">Normaal account</label>
                    </div>

                    <input type="submit" class="btn btn-success" value="Verzenden" >

                </div>
            </form>
        </div>

    @endsection
