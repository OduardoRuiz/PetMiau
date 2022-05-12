@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>cadastrar endereço</h1>

    <form action="{{route('endereco.store')}}" method="post">
    @csrf
    
    <div class="row">
        <span class="form-label">CEP</span>
        <input type="number"  name="cep" class="form-control" required>
    </div>

    <div class="row">
        <span class="form-label">rua</span>
        <input type="text"  name="rua" class="form-control" required>
    </div>

    <div class="row">
        <span class="form-label">numero</span>
        <input type="number"  name="numero" class="form-control" required>
    </div>
    
    <div class="row">
        <span class="form-label">complemento</span>
        <input type="text"  name="complemento" class="form-control" required>
    </div>

    <div class="row">
        <span class="form-label">bairro</span>
        <input type="text"  name="bairro" class="form-control" required>
    </div>

    <div class="row">
        <span class="form-label">cidade</span>
        <input type="text"  name="cidade" class="form-control" required>
    </div>

    <div class="row">
        <span class="form-label">uf</span>
        <input type="text"  name="uf" class="form-control" required>
    </div>

    <div class="row">
        <span class="form-label">contato</span>
        <input type="text"  name="contato" class="form-control" required>
    </div>
    
    
    
    <div>
        <button type="submit">salvar</button>
    </div>

    
    </form>
    
</body>
</html>