@include('layouts.header')

<body>
    @include('layouts.menu')

    <body>

        <h1>editar usuario</h1>
        
        <h1>Pagina Usuario</h1>

        <form action="{{ route('user.update', $user->id, $id = $user->id) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="row">
                <label for="" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="row">
                <label class="form-label" for="">Imagem</label>
                <input type="file" class="form-control" name="imagem">

            </div>

            <button type="submit">salvar</button>
        </form>

    </body>

    </html>
