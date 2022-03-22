@extends('base')

@section('content')
    <div class="container">
        <h1>Admin</h1>
        <h2>User Info</h2>
        <h3>{{$user->first_name}} {{$user->last_name}}</h3>
        <h4>{{$user->id}}</h4>
        @if(Auth::User()->admin_id == 1)
            <p>Dit account is een Admin account</p>
        @else
            <p>Dit is Geen admin account</p>
        @endif
    </div>

@endsection
