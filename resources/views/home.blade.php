@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Painal de Controle</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="http://localhost:8000/admin/animals">
                        <button type="submit" class="btn btn-primary">Gerenciar Animais</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
