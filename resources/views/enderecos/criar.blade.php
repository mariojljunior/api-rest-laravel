
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ '/css/style.css' }}">

    <title>Cadastrar</title>

</head>
<body>
    <div class="container p-3">
        <form action="{{ route('salvar_enderecos') }}" method="POST">
            @csrf
            <div class="field">
                <label for="nome" class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="nome" name="nome" id="nome">
                </div>
            </div>


            <div for="telefone" class="field">
                <label class="label">Telefone</label>
                <div class="control">
                    <input class="input" type="text" placeholder="telefone" name="telefone" id="telefone">
                </div>
            </div>


            <div class="field">
                <label for="cpf_cnpj" class="label">CPF/CNPJ</label>
                <div class="control">
                    <input class="input" type="text" placeholder="cpf_cnpj" name="cpf_cnpj" id="cpf_cnpj">
                </div>
            </div>

            <div class="field">
                <label for="cep" class="label">CEP</label>
                <div class="control">
                    <input class="input" type="text" placeholder="cep" name="cep" id="cep">
                </div>
            </div>

            <div class="field">
                <label for="rua" class="label">Rua</label>
                <div class="control">
                    <input class="input" type="text" placeholder="rua"  name="rua" id="rua">
                </div>
            </div>

            <div class="field">
                <label for="bairro" class="label">Bairro</label>
                <div class="control">
                    <input class="input" type="text" placeholder="bairro" name="bairro" id="bairro">
                </div>
            </div>

            <div class="field">
                <label for="cidade" class="label">Cidade</label>
                <div class="control">
                    <input class="input" type="text" placeholder="cidade" name="cidade" id="cidade">
                </div>
            </div>

            <div class="field">
                <label for="estado" class="label">Estado</label>
                <div class="control">
                    <input class="input" type="text" placeholder="estado" name="estado" id="estado">
                </div>
            </div>

            <div class="field">
                <label for="ibge" class="label">IBGE</label>
                <div class="control">
                    <input class="input" type="text" placeholder="ibge" name="ibge" id="ibge">
                </div>
            </div>

            <input class="button is-link" type="submit" value="Salvar">
            <a class="button is-danger" href="{{ route('mostrar_enderecos') }}">Cancelar</a>
        </form>
    </div>


    {{-- Importa o CSS --}}
    <script src="{{asset('/js/script.js')}}"></script>
</body>
</html>
