@extends('layouts.layout')

@section('content')
    <br/>
    <h3>Cadastrar animal</h3>
    <br/>
    <a class="btn btn-primary" href="{{route('animals.index')}}">Retornar listagem</a>
    <br/><br/>
    @include('animals._form_errors')
    <form method="post" action="{{route('animals.store')}}">
        @include('animals._form')
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
@endsection