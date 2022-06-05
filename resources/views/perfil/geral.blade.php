<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QrCode Cadastro</title>
    <!-- CSS only -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body class="telaQrCode">
    

    <main class="m-5 telaQrCode">
        <h1>Informações </h1>

        <div class="card telaQrCode" style="width: 18rem;">
            <img src="{{ asset($pet->imagem )}}" class="card-img-top" alt="Imagem Pet">
            <div class="card-body">

                <h5 class="card-title">Oi, meu nome é: {{ $pet->nome }}</h5>
                <p class="card-text">minhas informações estão abaixo.</p>

            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Este é meu tutor : <img src="{{  asset($user->imagem )}}" style="width:100px"></li>
                <li class="list-group-item">O nome dele(a) é : {{ $user->name }}</li>
                <li class="list-group-item">Meu Bairro : {{ $endereco->bairro }}, minha cidade : {{ $endereco->cidade }}</li>
                <li class="list-group-item">Contato do meu dono : <div>{{ $endereco->contato }}</div> </li>
                <li class="list-group-item">Caso eu aparente estar perdido(a), por gentileza entre em contato, tenho certeza que estão sentindo minha falta</li>
            </ul>
        </div>
    </main>
    @include('layouts.footer')

</body>

</html>
