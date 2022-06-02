@include('layouts.header')

<body>
    @include('layouts.menu')

    <h1 class="titleAdmin h4 mt-2">Crie uma noticia</h1>

    <div class="m-3">

        <form action="{{ route('noticia.store') }}" method="post">
            @csrf
            <textarea class="form-control" name="noticia"></textarea>

            <button class="btn btn-primary mt-3" type="submit">salvar</button>
        </form>
    </div>
    @include('layouts.footer')

</body>

</html>
