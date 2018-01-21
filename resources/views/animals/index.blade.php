@extends('layouts.layout')

@section('content')
    <style>
        .buttons > a{
            font-size: 16px;
            display: inline-block;
            padding: 9px 11px 9px 11px;
            border-radius: 20px;
        }
        .buttons > button{
            padding: 13px 15px 13px 15px;
            border-radius: 20px;
        }

        .form-group > button{
            postion: relative;
            margin-left: 101%;
            margin-top: -4.8%;
            size: 10px;
            padding: 15px 15px 15px 15px;
            border-radius: 30px;
        }
        .form-group > a {
            postion: relative;
            margin-left: 106%;
            margin-top: -6.8%;
            size: 10px;
            padding: 15px 15px 15px 15px;
            border-radius: 30px;
        }
    </style>
<br/><br/>
    <div class="row">
        <form method="GET" action="{{route('animals.store')}}" class="form">
            <div class="form-group">
                <label for="busca"><h3>Buscar clientes</h3></label>
                <br/>
                <input class="form-control" name="busca" id="busca" type="text" placeholder="Digite aqui a sua busca">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" value="Buscar animal" type="submit"><span class="glyphicon glyphicon-search"></span></button> &nbsp;&nbsp;
                <a class="btn btn-info" href="{{route('animals.index')}}"><span class="glyphicon glyphicon-step-backward"></span></a>
            </div>
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