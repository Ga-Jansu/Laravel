<h1>Listagem dos suportes</h1>

<a href="{{route('support.create')}}">Criar Duvidas</a>

<table>
    <thead>
        <th>assuntos</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($supports as $support)
            <tr>
                <td>{{$supports->subject}}</td>
                <td>{{$supports->status}}</td>
                <td>{{$supports->body}}</td>
            </tr>
        @endforeach
    </tbody>
</table>