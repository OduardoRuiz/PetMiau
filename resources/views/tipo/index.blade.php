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
    <a href="{{route('tipo.create')}}" class="btn btn-sm btn-primary">Criar tipo</a>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($tipos as $tipo)
                <tr>
                    <td>{{ $tipo->id }}</td>
                    <td>{{ $tipo->nome }}</td>

                    <td>
                        
                        <a href="{{Route('tipo.edit',$tipo->id)}}" class="btn btn-sm btn-warning">Editar</a>
                        <form method="POST" action="{{Route('tipo.destroy',$id=$tipo->id)}}" class="d-inline">
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