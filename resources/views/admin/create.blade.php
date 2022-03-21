@extends('base')

@section('content')

    <div class="container">
        <h1>Nieuwe User</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <from action="{{ route('admin.store') }}" method="POST">
        @csrf
        <div class="form">
            <label for="name">Voor Naam</label>
            <input type="text" name="first_name" id="first_name" placeholder="Voor Naam" class="form-control">

            <label for="last_name">AchterNaam</label>
            <input type="text" name="last_name" id="last_name" placeholder="AchterNaam" class="form-control">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="123@gmail.com" class="form-control">

            <label for="phone_number">Telefoonn nummer</label>
            <input type="tel" name="phone_number" id="phone_number" placeholder="0612345678" class="form-control">

            <br>

            <input type="checkbox" name="admin_id" value="1">
            <label for="admin_id">Dit is een Admin account</label>

            <br>
            <br>

            <input type="submit" value="submit" class="btn btn-primary">

        </div>
    </from>

@endsection
