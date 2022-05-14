@include('layouts.header')
<body>
    @include('layouts.menu')
    <h1>criar vacina</h1>
    <h1>Pagina do Admin</h1>

    <form action="{{route('vacina.store')}}" method="post">
    @csrf
    <span>Nome</span>
    <input type="text" name="nome" id="">

    <button type="submit">salvar</button>
    </form>
    
</body>
</html>