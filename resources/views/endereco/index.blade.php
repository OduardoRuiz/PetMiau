@include('layouts.header')
<body>
    <main>
    @include('layouts.menu')

    @if (session()->has('sucesso'))

    <div class="w-50 text-center d-flex justify-content-center mt-5 alert alert-success" role="alert">
        <div class=" balaoAlert">{{ session()->get('sucesso') }}</div>
    </div>
 @endif
    <h1 class="titleAdmin">Lista de endereços</h1>

    <div class="m-4 row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>CEP</th>
                    <th>Contato</th>
                   

                </tr>
            </thead>
            <tbody>
                @foreach($enderecos as $endereco)
                <tr>
                    <td>{{ $endereco->id }}</td>
                    <td>{{ $endereco->rua }}</td>
                    <td>{{ $endereco->numero }}</td>
                    <td>{{ $endereco->complemento }}</td>
                    <td>{{ $endereco->bairro }}</td>
                    <td>{{ $endereco->cidade }}</td>
                    <td>{{ $endereco->uf }}</td>
                    <td>{{ $endereco->cep }}</td>
                    <td>{{ $endereco->contato }}</td>
                    <td>


                        <form method="POST" action="{{ Route('endereco.destroy', $id = $endereco->id) }}" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onsubmit="return remover()">Apagar</button>
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
