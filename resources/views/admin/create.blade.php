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

    <from action="{{ route('admin.create') }}" method="POST">
        @csrf
        <div class="form">

            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Voor Naam</label>
                <input type="text" name="first_name" id="first_name"  class="form-control">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="last_name">AchterNaam</label>
                <input type="text" name="last_name" id="last_name" placeholder="AchterNaam" class="form-control">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="123@gmail.com" class="form-control">
            </div>

            <div class="input-group mb-3">
                <label for="password" value="__('password')" class="input-group-text">Password</label>
                <input type="password" class="form-control" type="password" name="password" required autocomplete="new-password">
            </div>

            <div class="input-group mb-3">
                <label for="password_confirmation" value="__('Confirm Password')" class="input-group-text">Confirm Password</label>
                <input type="password" class="form-control" type="password" name="password_confirmation" required >
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="phone_number">Telefoonn nummer</label>
                <input type="tel" name="phone_number" id="phone_number" placeholder="0612345678" class="form-control">
            </div>
            <br>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="admin_id" value="1">
                <label for="admin_id">Dit is een Admin account</label>
            </div>
            <br>
            <br>


                <input type="submit" value="submit" class="btn btn-primary">

        </div>
    </from>
    </div>

@endsection
