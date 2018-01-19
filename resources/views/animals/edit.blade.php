@extends('layouts.layout')

@section('content')
    <br/>
    <h3>Editar animal</h3>
    <br/>
    @include('animals._form_errors')
    <form method="post"  action="{{ route('animals.update', ['animal' => $animal->id]) }}">
        {{method_field('PUT')}}
        @include('animals._form')
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection