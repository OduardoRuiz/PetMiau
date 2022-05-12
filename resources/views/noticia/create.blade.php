@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>criar noticia</h1>

    <form action="{{route('noticia.store')}}" method="post">
    @csrf
    <span>noticia</span>
    <input type="text" name="noticia" id="">

    <button type="submit">salvar</button>
    </form>
    
</body>
</html>