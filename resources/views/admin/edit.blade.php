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
                    <label for="title">Admin veld</label>
                    <input type="number" max="1" min="0" id="admin_id" name="admin_id" value="{{$user->admin_id}}" class="form-control">

                    <a href="{{ route('admin.index')}}"> <input type="submit" class="btn btn-success" value="Verzenden" ></a>

                </div>
            </form>
        </div>

    @endsection
