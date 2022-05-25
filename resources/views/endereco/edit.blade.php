@include('layouts.header')

<body>
    @include('layouts.menu')

    <main>

    
    <h1>editar endereco</h1>

    

    <form action="{{ route('endereco.update', $endereco->id) }}" method="post">
        @method('PATCH')
        @csrf

        <div class="row">
            <span class="form-label">CEP</span>
            <input type="text" name="cep" class="form-control" required value="{{ $endereco->cep }}" id="cep" onblur="cadastro.cep.pesquisacep(this.value);"maxlength="9" onkeypress="soNumero(this.id)">
        </div>

        <div class="row">
            <span class="form-label">rua</span>
            <input type="text" name="rua" class="form-control" required value="{{ $endereco->rua }}" id="rua">
        </div>

        <div class="row">
            <span class="form-label">numero</span>
            <input type="number" name="numero" class="form-control" required value="{{ $endereco->numero }}" id="numero">
        </div>

        <div class="row">
            <span class="form-label">complemento</span>
            <input type="text" name="complemento" class="form-control"  value="{{ $endereco->complemento }}" id="complemento">
        </div>

        <div class="row">
            <span class="form-label">bairro</span>
            <input type="text" name="bairro" class="form-control" required value="{{ $endereco->bairro }}" id="bairro">
        </div>

        <div class="row">
            <span class="form-label">cidade</span>
            <input type="text" name="cidade" class="form-control" required value="{{ $endereco->cidade }}" id="cidade">
        </div>

        <div class="row">
            <span class="form-label">uf</span>
            <input type="text" name="uf" class="form-control" required value="{{ $endereco->uf }}" id="estado">
        </div>

        <div class="row">
            <span class="form-label">contato</span>
            <input type="text" name="contato" class="form-control" required value="{{ $endereco->contato }}">
        </div>



        <div>
            <button type="submit">salvar</button>
        </div>



    </form>

</main>

</body>

</html>
