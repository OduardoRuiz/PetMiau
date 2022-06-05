@include('layouts.header')

<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div class=" text-center d-flex justify-content-center mt-5 alert alert-success" role="alert">
            <div class=" balaoAlert">{{ session()->get('sucesso') }}</div>
        </div>
    @endif

    <h1 class="titleAdmin h4">Apagar usuários</h1>

    <div class="row m-3">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>imagem</th>
                    <th>Opção</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td><img src="{{ $user->imagem }}" style="width:35px"></td>

                        <td>


                            <form method="POST" action="{{ Route('user.destroy', $id = $user->id) }}"
                                class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onsubmit="return remover()">Apagar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        @include('layouts.footer')

</body>

</html>
