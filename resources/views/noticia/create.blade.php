@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>criar noticia</h1>
    <h1>Pagina do Admin</h1>

    <form action="{{route('noticia.store')}}" method="post">
    @csrf
    <span>noticia</span>
    <textarea class="form-control" name="noticia"></textarea>

    <button type="submit">salvar</button>
    </form>
    @include('layouts.footer')
 
</body>
</html>