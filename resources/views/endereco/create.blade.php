@include('layouts.header')
<body>
    @include('layouts.menu')


    <h1  class="cadastrarUser">Cadastre suas informações</h1>
    <p class="completeUser">Complete os campos a seguir</p>

    <form action="{{route('endereco.store')}}" method="post">
    @csrf

    <div class="form-group campoDigitar">
        <!--<span class="form-label ml-2">CEP</span> -->
        <input type="number"  name="cep" class="form-control" placeholder="Digite seu CEP" required>
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">rua</span> -->
        <input type="text"  name="rua" class="form-control" required placeholder="Nome da sua Rua/Avenida">
    </div>

    <div class="form-group mt-3 campoDigitar  ">
        <!--<span class="form-label ml-2">numero</span> -->
        <input type="number"  name="numero" class="form-control" required placeholder="Número">
    </div>

    <div class="form-group mt-3 campoDigitar ">
        <!--<span class="form-label ml-2">complemento</span> -->
        <input type="text"  name="complemento" class="form-control" required placeholder="Complemento"> <!-- não deixar como obrigatorio--->
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">Bairro</span> -->
        <input type="text"  name="bairro" class="form-control" required placeholder="Bairro">
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">cidade</span> -->
        <input type="text"  name="cidade" class="form-control" required placeholder="Cidade">
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">uf</span> -->
        <input type="text"  name="uf" class="form-control" required placeholder="Estado">
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">contato</span> -->
        <input type="text"  name="contato" class="form-control" required placeholder="Telefone">
    </div>



    <div>
        <button type="submit" class="botaoCadastrar mt-4 btn-lg btn-block ">Cadastrar</button>
    </div>


    </form>

</body>
</html>
