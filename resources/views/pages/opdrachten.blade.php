@extends('base')

@section('content')
<div class="container">
    <h1>Opdrachten</h1>
    <a class="btn btn-primary" href="{{route('opdrachten_create')}}" role="button">Maak een opdracht!</a>
</div>
@endsection
