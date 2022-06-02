@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1 class="cadastrarTipo h4 mt-2">Editar tipo do Pet</h1>


    <form action="{{route('tipo.update', $tipo->id)}}" method="post">
    @method('PATCH')
    @csrf
    <div class="form-group mt-3 campoDigitar">
        <label for="" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" value="{{ $tipo->nome }}">
    </div>

    <button type="submit" class="botaoCadastrar mt-4 btn-lg btn-block ">Salvar</button>
    </form>
    @include('layouts.footer')

</body>
</html>
