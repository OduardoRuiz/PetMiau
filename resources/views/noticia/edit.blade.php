@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>editar noticia</h1>
    <h1>Pagina do Admin</h1>

    <form action="{{route('noticia.update', $noticia->id)}}" method="post">
    @method('PATCH')
    @csrf
    <span>Noticia</span>
    
    <textarea class="form-control" name="noticia">{{$noticia->noticia}}</textarea>

    <button type="submit">salvar</button>
    </form>
    
</body>
</html>