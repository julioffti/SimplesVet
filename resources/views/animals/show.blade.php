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
</br>
<div class="buttons">
<a href="{{route('animals.edit', ['animal' => $animal->id])}}" class="btn btn-info">Editar</a>&nbsp;&nbsp;
<a class="btn btn-danger" href="{{ route('animals.destroy',['animal' => $animal->id]) }}"
   onclick="event.preventDefault();if(confirm('Deseja excluir este animal??')){document.getElementById('form-deletar-{{$animal->id}}').submit();}">Excluir</a>
<form id="form-deletar-{{$animal->id}}"style="display: none" action="{{ route('animals.destroy',['client' => $animal->id]) }}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <br/>
</form>
</div>
    <br/><br/>
<table class="table table-bordered">
    <tbody>
    <tr>
        <th scope="row">ID</th>
        <td>{{$animal->id}}</td>
    </tr>

    <tr>
        <th scope="row">Nome</th>
        <td>{{$animal->name}}</td>
    </tr>

    <tr>
        <th scope="row">Race</th>
        <td>{{$animal->race}}</td>
    </tr>

    <tr>
        <th scope="row">Peso</th>
        <td>{{$animal->weight}}</td>
    </tr>
    </tbody>
</table>
<div class="buttons">
<a class="btn btn-primary" href="{{route('animals.index')}}">Retornar listagem</a>
</div>
@endsection