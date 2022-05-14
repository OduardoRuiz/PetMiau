@include('layouts.header')
<body>
    @include('layouts.menu')
    <h1>criar tipo</h1>
    <h1>Pagina do Admin</h1>

    <form action="{{route('tipo.store')}}" method="post">
    @csrf
    <div class="row">
        <span class="form-label">Nome</span>
        <input type="text" name="nome" class="form-control" >
        </div>

    <button type="submit">salvar</button>
    </form>
    
</body>
</html>