@include('layouts.header')
<body>
    <main>
    @include('layouts.menu')

    @if (session()->has('sucesso'))

    <div class="w-50 text-center d-flex justify-content-center mt-5 alert alert-success" role="alert">
        <div class=" balaoAlert">{{ session()->get('sucesso') }}</div>
    </div>
 @endif

    <h1 class="titleAdmin h4 mt-2">Criação de notícias</h1>
        <div><a href="{{ route('noticia.create') }}" class="btn btn-md btn-primary ml-3">Criar noticia</a></div> 

    <div class="m-3 row">
        <table class="table table-striped">
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
       </main>
        @include('layouts.footer')

</body>

</html>
