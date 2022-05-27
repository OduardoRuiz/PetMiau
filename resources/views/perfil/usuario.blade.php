@include('layouts.header')
<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif

    <main class="m-5">

        <h1 class="minhaContaPrincipal" >Minha conta</h1>
        <div class="minhaConta">
            <img src="{{ $user->imagem }}" style="width:100px">

        </div>

        <div class="minhaConta">
            <h2 class="minhaConta">nome</h2>
            <div class=" minhaConta">
                {{ $user->name }}
            </div>

            <div >
                <a href="{{ Route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Editar</a>
            </div>

        </div>


        @if (!$endereco)
            <div class="CriarEndereco">
                <a href="{{ route('endereco.create') }}" class="btn btn-sm btn-primary ">Criar endereco</a>
            </div>
        @else
            <div class="minhaConta">
                <h2 class="minhaContaPrincipal">Endereço</h2>

                <div class="minhaConta">
                    <label for="" class="enderecoConta">CEP:</label>
                    {{ $endereco->cep }}
                </div>

                <div class="minhaConta">
                    <label for="" class="enderecoConta">Rua:</label>
                    {{ $endereco->rua }}
                </div>

                <div class="minhaConta">
                    <label for="" class="enderecoConta">Número:</label>
                    {{ $endereco->numero }}
                </div>

                <div class="minhaConta">
                    <label for="" class="enderecoConta">Complemento:</label>
                    {{ $endereco->complemento }}
                </div>

                <div class="minhaConta">
                    <label for="" class="enderecoConta">Bairro:</label>
                    {{ $endereco->bairro }}
                </div>

                <div class="minhaConta">
                    <label for="" class="enderecoConta">Cidade:</label>
                    {{ $endereco->cidade }}
                </div>

                <div class="minhaConta">
                    <label for="" class="enderecoConta">Estado:</label>
                    {{ $endereco->uf }}
                </div>

                <div class="minhaConta">
                    <label for="" class="enderecoConta">Contato:</label>
                    {{ $endereco->contato }}
                </div>

                <div>
                    <a href="{{ Route('endereco.edit', $endereco->id) }}" class="btn btn-sm btn-warning">Editar</a>
                </div>

            </div>
        @endif

    </main>

