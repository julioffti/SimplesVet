@extends('layouts.layout')

@section('content')
    <style>
        .buttons > a{
            display: inline-block;
            padding: 12px 10px 12px 10px;
            border-radius: 20px;
        }
        .buttons > button{
            display: inline-block;
            padding: 12px 14px 12px 14px;
            border-radius: 20px;
        }
    </style>
    <br/>
    <h3>Cadastrar animal</h3>
    <br/><br/>
    @include('animals._form_errors')
    <form method="post" action="{{route('animals.store')}}">
        @include('animals._form')
        <div class="buttons">
        <button type="submit" class="btn btn-primary">Criar</button>
        &nbsp;
        <a class="btn btn-info" href="{{route('animals.index')}}">Retornar listagem</a>
        </div>
    </form>
@endsection