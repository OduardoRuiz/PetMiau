@include('layouts.header')

<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif

    <main class="m-5">

        <h1 class="minhaContaPrincipal">Minha conta</h1>


        <div class="minhaConta mb-3 mt-2">
            <div class="">
                <img src="{{ $user->imagem }}" style="width:100px">
            </div>
            <div class="mb-3">
              <span> {{ $user->name }}</span> 
            </div>
            <div>
                <a href="{{ Route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Editar meu perfil</a>
            </div>
        </div>



        @if (!$endereco)
            <div class="CriarEndereco">
                <a href="{{ route('endereco.create') }}" class="btn btn-sm btn-primary ">Criar endereco</a>
            </div>
        @else
            <div class="minhaConta enderecoDiv">
                <h2 class="">Informações</h2>

                <div class="minhaContaEndereco">
                    <label for="" class="enderecoConta">Endereço:</label>
                    {{ $endereco->rua }}, {{ $endereco->numero }} - {{ $endereco->complemento }} - CEP :
                    {{ $endereco->cep }}
                </div>

                <div class="minhaContaEndereco">
                    <label for="" class="enderecoConta">Bairro:</label>
                    {{ $endereco->bairro }}
                </div>

                <div class="minhaContaEndereco">
                    <label for="" class="enderecoConta">Cidade:</label>
                    {{ $endereco->cidade }} - {{ $endereco->uf }}
                </div>
                <div class="minhaContaEndereco">
                    <label for="" class="enderecoConta">Contato:</label>
                    {{ $endereco->contato }}
                </div>

                <div>
                    <a href="{{ Route('endereco.edit', $endereco->id) }}" class="btn btn-sm btn-warning">Editar informações</a>
                </div>

            </div>
        @endif

    </main>
    @include('layouts.footer')
