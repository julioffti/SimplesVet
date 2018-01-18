@extends('layouts.layout')

@section('content')
    <br/>
    <h3>Cadastrar animal</h3>
    <br/>
    <a class="btn btn-primary" href="{{route('animals.index')}}">Retornar listagem</a>
    <br/><br/>
        @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
        </ul>
        @endif

    <form method="post" action="/admin/animals">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="race">Raça</label>
            <input class="form-control" id="race" name="race">
        </div>

        <div class="form-group">
            <label for="weight">Peso</label>
            <input class="form-control" id="weight" name="weight" required pattern="[0-9]+.[0-9]+"
            required oninvalid="setCustomValidity('Informar apenas números')">
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection