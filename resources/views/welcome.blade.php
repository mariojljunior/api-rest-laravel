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
    <div class="container p-3">
        <h1 class="title has-text-centered">Escolha alguma opção</h1>
        
        <a class="button is-link is-fullwidth m-1" href="{{ route('criar_enderecos') }}" >Cadastrar novo endereço</a>
        <a class="button is-link is-fullwidth m-1" href="{{ route('mostrar_enderecos') }}" >Ver os endereços cadastrados</a>
    </div>
</body>
</html>