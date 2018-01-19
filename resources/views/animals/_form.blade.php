{{csrf_field()}}
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