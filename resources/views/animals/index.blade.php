@extends('layouts.layout')

@section('content')

<h2>Listagem de animais</h2>
<br/><br/>
<a class="btn btn-primary" href="{{route('animals.create')}}">Cadastrar Animal</a>
<br/><br/>
<table class="table table striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Raça</th>
        <th>Peso</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    @foreach($animals as $animal)
        <tr>
            <td>{{$animal->id}}</td>
            <td>{{$animal->name}}</td>
            <td>{{$animal->race}}</td>
            <td>{{$animal->weight}}</td>
            <td>
                <a href="{{route('animals.edit', ['animal' => $animal->id])}}">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection