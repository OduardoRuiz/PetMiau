@include('layouts.header')
<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        
    <div>
        {{session()->get('sucesso')}}

    </div>
 @endif
    <h1>Lista de endereco</h1>
    <h1>Pagina do Admin oiiii</h1>
    
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>rua</th>
                    <th>numero</th>
                    <th>complemento</th>
                    <th>bairro</th>
                    <th>cidade</th>
                    <th>uf</th>
                    <th>cep</th>
                    <th>contato</th>
                    <th>opção</th>
                    
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
    
</body>
</html>