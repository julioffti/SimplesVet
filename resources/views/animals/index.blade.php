<h1>Listagem de animais</h1>
<br/><br/>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Raça</th>
        <th>Peso</th>
    </tr>
    </thead>
    <tbody>
    @foreach($animals as $animals)
        <tr>
            <td>{{$animals->id}}</td>
            <td>{{$animals->name}}</td>
            <td>{{$animals->race}}</td>
            <td>{{$animals->weight}}</td>
        </tr>
    @endforeach
    </tbody>
</table>