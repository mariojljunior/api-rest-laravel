<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ '/css/style.css' }}">

        <title>Endereços</title>
</head>
    <body>
        <div class="container p-3">
            <table class="table is-striped is-fullwidth">
                <tr><th>Nome</th><th>Telefone</th><th>CPF/CNPJ</th><th>CEP</th><th>Rua</th><th>Bairro</th><th>Cidade</th><th>Estado</th><th>IBGE</th></tr>
                @foreach($addresses as $address)
                    <tr>
                        <td>{{$address->nome}}</td>
                        <td>{{$address->telefone}}</td>
                        <td>{{$address->cpf_cnpj}}</td>
                        <td>{{$address->cep}}</td>
                        <td>{{$address->rua}}</td>
                        <td>{{$address->bairro}}</td>
                        <td>{{$address->cidade}}</td>
                        <td>{{$address->estado}}</td>
                        <td>{{$address->ibge}}</td>
                        <td><a href="{{ route('editar_enderecos', ['id'=>$address->id])}}"
                                title="Editar endereço {{ $address->nome }}" >Editar</a></td>

                        <td><a href="{{ route('deletar_enderecos', ['id'=>$address->id])}}"
                                title="Excluir endereço {{ $address->nome }}" >Excluir</a></td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="container p-3">
            <a class="button is-link" href="{{ route('criar_enderecos') }}">Cadastrar Novo</a>
            <a class="button is-primary" href="{{ route('inicio') }}">Voltar ao início</a>
        </div>

    </body>
</html>
