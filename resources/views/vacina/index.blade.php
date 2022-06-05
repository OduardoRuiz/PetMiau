@include('layouts.header')

<body>
    <main>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div class=" text-center d-flex justify-content-center mt-5 alert alert-success" role="alert">
            <div class=" balaoAlert">{{ session()->get('sucesso') }}</div>
        </div>
    @endif

    <h1 class="titleAdmin h4 mt-2">Adicionar vacinas</h1>

    <div><a href="{{ route('vacina.create') }}" class="btn btn-md btn-primary ml-3">Criar vacina</a></div>

    <div class="m-3 row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($vacinas as $vacina)
                    <tr>
                        <td>{{ $vacina->id }}</td>
                        <td>{{ $vacina->nome }}</td>

                        <td>
                            <form method="POST" action="{{ Route('vacina.destroy', $id = $vacina->id) }}"
                                class="d-inline">
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
