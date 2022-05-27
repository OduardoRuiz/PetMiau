@include('layouts.header')

<body>
    @include('layouts.menu')

    <main>


    <h1 class="editEndereco">Edite seu endereço</h1>



    <form action="{{ route('endereco.update', $endereco->id) }}" method="post">
        @method('PATCH')
        @csrf

        <div class="form-group campoDigitar">
            <span class="form-label">CEP</span>
            <input type="text" name="cep" class="form-control" required value="{{ $endereco->cep }}" id="cep" onblur="cadastro.cep.pesquisacep(this.value);"maxlength="9" onkeypress="soNumero(this.id)">
        </div>

        <div class="form-group campoDigitar">
            <span class="form-label">Rua/Avenida</span>
            <input type="text" name="rua" class="form-control" required value="{{ $endereco->rua }}" id="rua">
        </div>

        <div class="form-group campoDigitar">
            <span class="form-label">Número</span>
            <input type="number" name="numero" class="form-control" required value="{{ $endereco->numero }}" id="numero">
        </div>

        <div class="form-group campoDigitar">
            <span class="form-label">Complemento</span>
            <input type="text" name="complemento" class="form-control"  value="{{ $endereco->complemento }}" id="complemento">
        </div>

        <div class="form-group campoDigitar">
            <span class="form-label">Bairro</span>
            <input type="text" name="bairro" class="form-control" required value="{{ $endereco->bairro }}" id="bairro">
        </div>

        <div class="form-group campoDigitar">
            <span class="form-label">Cidade</span>
            <input type="text" name="cidade" class="form-control" required value="{{ $endereco->cidade }}" id="cidade">
        </div>

        <div class="form-group campoDigitar">
            <span class="form-label">Estado</span>
            <input type="text" name="uf" class="form-control" required value="{{ $endereco->uf }}" id="estado">
        </div>

        <div class="form-group campoDigitar">
            <span class="form-label">Contato</span>
            <input type="text" name="contato" class="form-control" required value="{{ $endereco->contato }}">
        </div>



        <div>
            <button type="submit" class="botaoEditEndereco mt-4 btn-lg btn-block">salvar</button>
        </div>



    </form>

</main>

</body>

</html>
