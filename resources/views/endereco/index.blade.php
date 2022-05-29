@include('layouts.header')
<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))

    <div>
        {{session()->get('sucesso')}}

    </div>
 @endif
    <h1>Lista de endereços</h1>

    <div class="row">
        <table class="table table-striped ml-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rua</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>CEP</th>
                    <th>Contato</th>
                    <th>Opção</th>

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
        @include('layouts.footer')

</body>
</html>
