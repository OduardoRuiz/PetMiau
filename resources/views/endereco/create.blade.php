@include('layouts.header')
<body>
    @include('layouts.menu')


    <h1  class="cadastrarUser h4 mt-2">Cadastre suas informações</h1>
    <p class="completeUser">Complete os campos a seguir</p>

    <form action="{{route('endereco.store')}}" method="post">
    @csrf

    <div class="form-group campoDigitar">
        <!--<span class="form-label ml-2">CEP</span> -->
        <input type="text"  name="cep" class="form-control" placeholder="Digite seu CEP" required id="cep" onblur="cadastro.cep.pesquisacep(this.value);"  maxlength="9" onkeypress="soNumero(this.id)">
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">rua</span> -->
        <input type="text"  name="rua" class="form-control" required placeholder="Nome da sua Rua/Avenida" id="rua">
    </div>

    <div class="form-group mt-3 campoDigitar  ">
        <!--<span class="form-label ml-2">numero</span> -->
        <input type="number"  name="numero" class="form-control" required placeholder="Número" id="numero" >
    </div>

    <div class="form-group mt-3 campoDigitar ">
        <!--<span class="form-label ml-2">complemento</span> -->
        <input type="text"  name="complemento" class="form-control" required placeholder="Complemento"  id="complemento"> <!-- não deixar como obrigatorio--->
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">Bairro</span> -->
        <input type="text"  name="bairro" class="form-control" required placeholder="Bairro" id="bairro" >
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">cidade</span> -->
        <input type="text"  name="cidade" class="form-control" required placeholder="Cidade" id="cidade">
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">uf</span> -->
        <input type="text"  name="uf" class="form-control" required placeholder="Estado" id="estado">
    </div>

    <div class="form-group mt-3 campoDigitar">
        <!--<span class="form-label ml-2">contato</span> -->
        <input type="text" name="contato" onkeypress="soNumero(this.id)" class="form-control" id="telefone" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" placeholder="Somente numeros" required="required" maxlength="15">
    </div>



    <div>
        <button type="submit" class="botaoCadastrar mt-4 btn-lg btn-block ">Cadastrar</button>
    </div>


    </form>
    @include('layouts.footer')

</body>
</html>
