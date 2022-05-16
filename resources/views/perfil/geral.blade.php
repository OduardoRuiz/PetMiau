<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>Pagina qr code</header>

    <main class="m-5">
        <h1>Pagina qrcode</h1>
        <div>
            <h2>TESTE DIGITAL</h2>
            <h2>foto</h2>
        <img src="{{  asset($user->imagem )}}" style="width:100px">
    
        </div>
    
        <div>
           <h2>nome</h2>
            <div class="row">
                {{ $user->name }}
            </div>
    
    
        </div>
    
        <div>
            <h2>endereço</h2>
            
            <div class="row">
                <label>cep</label>
                {{ $endereco->cep }}
            </div>
    
            <div class="row">
                <label>rua</label>
                {{ $endereco->rua }}
            </div>
    
            <div class="row">
                <label>numero</label>
                {{ $endereco->numero }}
            </div>
    
            <div class="row">
                <label>complemento</label>
                {{ $endereco->complemento }}
            </div>
    
            <div class="row">
                <label>bairro</label>
                {{ $endereco->bairro }}
            </div>
    
            <div class="row">
                <label>cidade</label>
                {{ $endereco->cidade }}
            </div>
    
            <div class="row">
                <label>uf</label>
                {{ $endereco->uf }}
            </div>
    
            <div class="row">
                <label>contato</label>
               {{ $endereco->contato }}
            </div>
    
    
        </div>

        <div>
            <h1>pet</h1>

            <div>
                <h2>foto</h2>
                <img src="{{ asset($pet->imagem )}}" style="width:100px">
        
            </div>
        
            <div>
               <h2>nome</h2>
                <div class="row">
                    {{ $pet->nome }}
                </div>
        
        
            </div>






        </div>
    </main>
    
</body>
</html>