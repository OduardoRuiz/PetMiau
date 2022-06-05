@include('layouts.header')

<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div class=" text-center d-flex justify-content-center mt-5 alert alert-success" role="alert">
            <div class=" balaoAlert">{{ session()->get('sucesso') }}</div>
        </div>
    @endif

    <main class="m-2">

        <h1 class="minhaContaPrincipal h4">Minha conta</h1>


        <div class="minhaConta mb-3 mt-2">

            <div class="profilepic">
                <a href="{{ Route('user.edit', $user->id) }}" class="text-decoration-none">
                    <img class="profilepic__image" src="{{ $user->imagem }}" style="width:100px">

                    <div class="profilepic__content">
                        <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                        <span class="profilepic__text">Editar Perfil</span>
                    </div>
                </a>

                    <div>

                        <div class="mb-3">
                            <span style="color: black" class="fs-4"> {{ $user->name }}</span>
                        </div>
              
            </div>

        </div>
        </div>


        @if (!$endereco)
            <div class="CriarEndereco">
                <a href="{{ route('endereco.create') }}" class="btn btn-sm btn-primary ">Criar endereco</a>
            </div>
        @else
            <div class="minhaConta enderecoDiv mb-3">
                <h2 class="h4 ml-3">Informações</h2>

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

                <div class="ml-4">
                    <a href="{{ Route('endereco.edit', $endereco->id) }}" class="btn btn-sm btn-warning">Editar
                        informações</a>
                </div>

            </div>
        @endif

    </main>
    @include('layouts.footer')
