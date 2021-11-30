'use strict';

const limparFormulario = (endereco) =>{
    document.getElementById('rua').value = '';
    document.getElementById('bairro').value = '';
    document.getElementById('cidade').value = '';
    document.getElementById('estado').value = '';
    document.getElementById('ibge').value = '';
}

const preencherFormulario = (endereco) =>{
    document.getElementById('rua').value = endereco.logradouro;
    document.getElementById('bairro').value = endereco.bairro;
    document.getElementById('cidade').value = endereco.localidade;
    document.getElementById('estado').value = endereco.uf;
    document.getElementById('ibge').value = endereco.ibge;
}

const eNumero = (numero) => /^[0-9]+$/.test(numero);

const cepValido = (cep) => cep.length == 8 && eNumero(cep);

const cpfValido = (pessoa) => pessoa.length == 11 && eNumero(pessoa);
const cnpjValido = (pessoa) => pessoa.length == 14 && eNumero(pessoa);

const pesquisarCep = async() => {
    limparFormulario();

    const cep = document.getElementById('cep').value.replace("-","");
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    if (cepValido(cep)){
        const dados = await fetch(url);
        const endereco = await dados.json();
        if (endereco.hasOwnProperty('erro')){
            document.getElementById('rua').value = 'CEP não encontrado!';
        }else {
            preencherFormulario(endereco);
        }
    }else{
        document.getElementById('rua').value = 'CEP incorreto!';
    }

}
document.getElementById('cep').addEventListener('focusout',pesquisarCep);



const pessoaFisicaJuridica = async() => {

    const pessoa = document.getElementById("cpf_cnpj").value;

    if (cpfValido(pessoa)) {
        const cpf = await pessoa.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
        document.getElementById('cpf_cnpj').value = '';
        document.getElementById('cpf_cnpj').value = cpf;
    }else if (cnpjValido(pessoa)) {
        const cnpj = await pessoa.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5");
        document.getElementById('cpf_cnpj').value = '';
        document.getElementById('cpf_cnpj').value = cnpj;
    }else{
        document.getElementById('cpf_cnpj').value = '';
        document.getElementById('cpf_cnpj').value = 'Formato Inválido!';
    }
}
document.getElementById('cpf_cnpj').addEventListener('focusout', pessoaFisicaJuridica);
