@include('layouts.header')
<body>
    @include('layouts.menu')
    <h1 class="cadastrarTipo h4 mt-2">Criar tipo de Pet</h1>


    <form action="{{route('tipo.store')}}" method="post">
    @csrf
    <div class="form-group mt-3 campoDigitar">
        <span class="form-label">Nome</span>
        <input type="text" name="nome" class="form-control" >
        </div>

    <button type="submit" class="botaoCadastrar mt-4 btn-lg btn-block ">salvar</button>
    </form>
    @include('layouts.footer')

</body>
</html>
