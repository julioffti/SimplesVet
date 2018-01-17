@extends('layouts.layout')

@section('content')
    <br/>
    <h3>Cadastrar animal</h3>
    <br/>
    <form method="post" action="/api/animals">
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
            <input class="form-control" id="weight" name="weight">
        </div>
        <button type="submit" class="btn-btn-default">Enviar</button>
    </form>
@endsection