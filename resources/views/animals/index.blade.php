@extends('layouts.layout')

@section('content')

<h2>Listagem de animais</h2>
<br/><br/>
<table class="table table striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Raça</th>
        <th>Peso</th>
    </tr>
    </thead>
    <tbody>
    @foreach($animals as $animals)
        <tr>
            <td>{{$animals->id}}</td>
            <td>{{$animals->name}}</td>
            <td>{{$animals->race}}</td>
            <td>{{$animals->weight}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection