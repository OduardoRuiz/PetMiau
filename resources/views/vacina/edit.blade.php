@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>editar vacina</h1>
    <h1>Pagina do Admin</h1>

    <form action="{{route('vacina.update', $vacina->id)}}" method="post">
    @method('PATCH')
    @csrf
    <span>Nome</span>
    <input type="text" name="nome" id="" value="{{$vacina->nome}}">

    <button type="submit">salvar</button>
    </form>
    @include('layouts.footer')
 
</body>
</html>