{{csrf_field()}}
<div class="form-group">
    <label for="name">Nome</label>
    <input class="form-control" id="name" name="name" value="{{old('name', $animal->name)}}">
</div>
<div class="form-group">
    <label for="race">Raça</label>
    <input class="form-control" id="race" name="race" value="{{old ('race', $animal->race)}}">
</div>
<div class="form-group">
    <label for="weight">Peso</label>
    <input class="form-control" id="weight" name="weight" value="{{old('weight', $animal->weight)}}">
</div>
<br/>