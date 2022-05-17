<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
/* Backgraund de todas as telas*/
body{
    background-color: #f2fbff;
}

/* Menu */

.navbar {
    background-color: #502d732b;
}

/* cadastrar pet e usuário */

.cadastrarPet, .completePet, .cadastrarTipo, .cadastrarVacina, .cadastrarUser, .completeUser, .minhaConta{
    text-align: center;
}

.botaoCadastrar {
    background-color: #565F99;
    color: beige;
}

.campoDigitar, .botaoCadastrar {
    margin: auto;
    width: 30rem;
}
.form-control, .botaoCadastrar {
    border-radius: 10px;
}

.campoEspecial {
    display: inline;
    width: 0.5rem;
}

/* Meus Pets */

.cssBotao{
    max-width: 65rem;
    width: 100%;
    margin: 2rem auto;
    padding: 5rem;
    text-align: center;
    background: #fff;
    border: 0.5rem solid #34495e;
}


.botaoPet {
    width: 14rem;
    border-radius: 15px;
    margin-bottom: 0.5rem;

}

.quadroPet{
    border: 0.2rem solid #709CB2;
    border-radius: 15px;
    margin-right: 2rem;
    background-color: #eaf6fb;

}</style>
    

    <title>Pet Miau</title>
</head>
