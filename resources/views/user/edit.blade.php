@include('layouts.header')

<body>
    @include('layouts.menu')

    <body>



        <h1 class="cadastrarUser">Edite suas informações</h1>

        <form action="{{ route('user.update', $user->id, $id = $user->id) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group mt-4 campoDigitar">
                <label for="" class="form-label ml-2">Nome</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group mt-4 campoDigitar">
                <label class="form-label ml-2" for="">Sua foto</label>
                <input type="file" class="form-control" name="imagem">

            </div>

            <button type="submit" class="botaoCadastrar mt-4 btn-lg btn-block ">salvar</button>
        </form>

    </body>

    </html>
