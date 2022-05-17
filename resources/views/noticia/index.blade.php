@include('layouts.header')
<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))

    <div>
        {{session()->get('sucesso')}}

    </div>
 @endif

    <h1>Criação de notícias <a href="{{ route('noticia.create') }}" class="btn btn-md btn-primary ml-3">Criar noticia</a></h1>

    <div class="row">
        <table class="table table-striped ml-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Noticia</th>
                    <th>Opções</th>

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
