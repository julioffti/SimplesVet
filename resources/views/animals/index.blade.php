@extends('layouts.layout')

@section('content')
    <style>
        .buttons > a{
            font-size: 16px;
            display: inline-block;
            padding: 12px 12px 10px 12px;
            border-radius: 20px;
        }
    </style>
<br/><br/>

    <div class="row">
        <form method="GET" action="{{route('animals.store')}}" class="form">
            <div class="form-group">
                <label for="busca">Buscar animais</label>
                <input class="form-control" name="busca" id="busca" type="text" placeholder="Digite aqui a sua busca">

                </br>

                <div class="form-group">
                    <input class="btn btn-primary" value="Buscar animal" type="submit">
                </div>
            </div>
            </br>
        </form>
    </div>

<div class="buttons">
<a class="btn btn-primary" href="{{route('animals.create')}}">Cadastrar Animal</a>
</div>
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
                <div class="buttons">
                <a href="{{route('animals.show', ['animal' => $animal->id])}}" class="btn btn-default btn-md"><span class="glyphicon glyphicon-eye-open">&nbsp;Ver</span></a>&nbsp;&nbsp;
                <a href="{{route('animals.edit', ['animal' => $animal->id])}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil">&nbsp;Editar</span></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
    {{$animals->links()}}
@endsection