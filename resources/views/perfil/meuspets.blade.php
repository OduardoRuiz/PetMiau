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
        <h1>Pagina Usuario</h1>

        <div class="row">

            @foreach ($pets as $pet)
                <!-- Modal do  QR CODE -->
                <div class="modal fade" {{ 'id=exampleModalCenter' . $pet->id . '' }} tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">QRcode</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @php
                                    $url='http://127.0.0.1:8000/geral/';
                                    
                                @endphp

                                
                                <img src={{'http://chart.apis.google.com/chart?cht=qr&chl=' .$url .$pet->id. '&chs=120x120'}} alt=" - QR code" />

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div>
                        <img src="{{ $pet->imagem }}" style="width:200px"></div>

                    <div>
                        @if (!$endereco)

                        <a href="{{route('endereco.create')}}" class="btn btn-sm btn-primary">Criar endereco</a>
                            
                        @else
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                            {{ 'data-target=#exampleModalCenter' . $pet->id . '' }}>
                            Gerar QR Code
                            </button>
                        @endif
                        
                    </div>
                    <div>
                        <a href="{{ Route('vacina_pet.index', $pet_id = $pet->id) }}"
                            class="btn btn-sm btn-warning">Vacinas</a>
                    </div>
                    <div>
                        <a href="{{ Route('observacao.index', $pet_id = $pet->id) }}" class="btn btn-sm btn-warning">ver
                            observação</a>
                    </div>
                    <div>
                        <a href="{{ Route('pet.edit', $pet->id) }}" class="btn btn-sm btn-warning">editar
                            informaçoes</a>
                    </div>

                </div>
            @endforeach

            <div class="row">
                {{ $pets->links() }}

            </div>
        </div>


    </main>
