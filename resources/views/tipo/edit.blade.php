@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>editar tipo</h1>

    <form action="{{route('tipo.update', $tipo->id)}}" method="post">
    @method('PATCH')
    @csrf
    <div class="row">
        <label for="" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" value="{{ $tipo->nome }}">
    </div>

    <button type="submit">salvar</button>
    </form>
    
</body>
</html>