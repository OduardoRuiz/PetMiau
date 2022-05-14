@include('layouts.header')
<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        
    <div>
        {{session()->get('sucesso')}}

    </div>
 @endif
    <h1>Lista de produtos</h1>
    <h1>Pagina do Admin</h1>
    <a href="{{ route('noticia.create') }}" class="btn btn-sm btn-primary">Criar noticia</a>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Noticia</th>
                    <th>Opçãoes</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($noticias as $noticia)
                    <tr>
                        <td>{{ $noticia->id }}</td>
                        <td><pre>{{ $noticia->noticia }}</pre></td>

                        <td>

                            <a href="{{ Route('noticia.edit', $noticia->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form method="POST" action="" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onsubmit="return remover()">Apagar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

</body>

</html>
