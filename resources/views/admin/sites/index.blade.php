<h1>Sites</h1>
<a href="{{route('sites.create')}}">Cadastrar</a>

<table>
    <thead>
        <tr>
            <th>Site</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sites as $site)
        <tr>
            <td>{{$site->url}}</td>
            <td>-</td>
        </tr>

        @endforeach
    </tbody>
</table>