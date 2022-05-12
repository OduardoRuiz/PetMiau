@include('layouts.header')

<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif

    <main class="m-5">

        <h1>meus pets</h1>

        <div class="row">

        @foreach ($pets as $pet)
            <div class="col-md-4">
                <div><img src="{{ $pet->imagem }}" style="width:200px"></div>

                <div>
                    <a href="" class="btn btn-sm btn-warning">Gerar QR Code</a>
                </div>
                <div>
                    <a href="" class="btn btn-sm btn-warning">Vacinas</a>
                </div>
                <div>
                    <a href="{{ Route('observacao.index',$pet_id=$pet->id) }}" class="btn btn-sm btn-warning">ver observação</a>
                </div>
                <div>
                    <a href="{{ Route('pet.edit', $pet->id) }}" class="btn btn-sm btn-warning">editar informaçoes</a>
                </div>
                    
            </div>
        @endforeach

        <div class="row">
            {{ $pets->links() }}

        </div>
    </div>


    </main>
