<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ '/css/style.css' }}">

    <title>Endereços</title>
</head>
<body>
    <div class="container pt-5">
        <div class="box">
            <h1 class="title has-text-centered">Escolha alguma opção</h1>
        
            <div class="buttons is-centered">
                <a class="button is-link" href="{{ route('criar_enderecos') }}" >Cadastrar novo endereço</a>
                <a class="button is-info" href="{{ route('mostrar_enderecos') }}" >Endereços cadastrados</a>
                <a href="https://github.com/mariojljunior/api-rest-laravel" target="_black" class="button is-dark"><span class="icon"><i class="fab fa-github"></i></span><span>GitHub</span></a>
            </div>
        </div>
        
    </div>

    <script src="https://kit.fontawesome.com/8097c82fee.js" crossorigin="anonymous"></script>
</body>
</html>