@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1 class="editNoticia">Editar notícia</h1>


    <form action="{{route('noticia.update', $noticia->id)}}" method="post">
    @method('PATCH')
    @csrf
    <div class="form-group mt-3 campoDigitar">
        <label for="" class="form-label">Notícia</label>

        <textarea class="form-control" name="noticia">{{$noticia->noticia}}</textarea>
    </div>
    <button type="submit" class="botaoCadastrar mt-4 btn-lg btn-block ">Salvar</button>
    </form>
    @include('layouts.footer')

</body>
</html>
