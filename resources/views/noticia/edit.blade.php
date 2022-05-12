@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>editar noticia</h1>

    <form action="{{route('noticia.update', $noticia->id)}}" method="post">
    @method('PATCH')
    @csrf
    <span>Nome</span>
    <input type="text" name="noticia" id="" value="{{$noticia->noticia}}">

    <button type="submit">salvar</button>
    </form>
    
</body>
</html>