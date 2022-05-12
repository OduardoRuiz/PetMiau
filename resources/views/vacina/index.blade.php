@include('layouts.header')
<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        
    <div>
        {{session()->get('sucesso')}}

    </div>
 @endif
    <h1>Lista de produtos</h1>
    <a href="{{route('vacina.create')}}" class="btn btn-sm btn-primary">Criar vacina</a>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($vacinas as $vacina)
                <tr>
                    <td>{{ $vacina->id }}</td>
                    <td>{{ $vacina->nome }}</td>

                    <td>
                        <form method="POST" action="{{ Route('vacina.destroy', $id = $vacina->id) }}" class="d-inline">
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