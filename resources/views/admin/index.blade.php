@extends('base')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>email</th>
                <th>Regio</th>
                <th>Postcode</th>
                <th>Admin</th>
                <th>Aanpassen</th>
            </tr>
            </thead>
            @foreach($users as $user)
                <tr>
                    <td class="table-dark"><a href="{{ route('admin.index', $user->id) }}">{{ $user->first_name }}</a></td>
                    <td class="table-dark">{{ $user->last_name }}</td>
                    <td class="table-dark">{{ $user->email }}</td>
                    <td class="table-dark">{{$user->region}}</td>
                    <td class="table-dark">{{$user->postal_code}}</td>
                    <td class="table-dark">{{$user->admin_id}}</td>
                    <td class="table-dark"><a href="{{ route('admin.index', $user->id) }}">Aanpassen</a></td>
                </tr>
            @endforeach
        </table>
        <a class="btn btn-primary" href="{{ route('admin.index') }}" role="button">+ Nieuwe User</a>
    </div>
@endsection

