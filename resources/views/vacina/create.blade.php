@include('layouts.header')
<body>
    @include('layouts.menu')
    <h1 class="cadastrarVacina h4 mt-2">Criar vacina</h1>

    <form action="{{route('vacina.store')}}" method="post">
    @csrf
    <div class="form-group mt-3 campoDigitar">
        <span class="form-label">Nome da vacina </span>
        <input type="text" name="nome" id="" class="form-control">
    </div>

    <button type="submit" class="botaoCadastrar mt-4 btn-lg btn-block ">salvar</button>
    </form>
    @include('layouts.footer')

</body>
</html>
