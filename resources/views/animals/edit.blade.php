@extends('layouts.layout')

@section('content')
    <br/>
    <h3>Editar animal</h3>
    <br/>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
        </ul>
    @endif

    <form method="post"  action="{{ route('animals.update', ['animal' => $animal->id]) }}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control" id="name" name="name" value="{{$animal->name}}">
        </div>
        <div class="form-group">
            <label for="race">Raça</label>
            <input class="form-control" id="race" name="race" value="{{$animal->race}}">
        </div>
        <div class="form-group">
            <label for="weight">Peso</label>
            <input class="form-control" id="weight" name="weight" value="{{$animal->weight}}">
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection