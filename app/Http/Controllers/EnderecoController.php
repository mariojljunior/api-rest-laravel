<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('enderecos.criar');
    }

    public function store(Request $request)
    {
        Endereco::create([
            "nome" => $request->nome,
            "telefone" => $request->telefone,
            "cpf_cnpj" => $request->cpf_cnpj,
            "cep" => $request->cep,
            "rua" => $request->rua,
            "bairro" => $request->bairro,
            "cidade" => $request->cidade,
            "estado" => $request->estado,
            "ibge" => $request->ibge
        ]);
        return "Endereço salvo com sucesso!";
    }

    public function show()
    {
        $addresses = Endereco::all();

        return view('enderecos.todos', ['addresses' => $addresses]);
    }

    public function edit($id)
    {
        $addresses = Endereco::findOrFail($id);
        return view('addresses.editar', ['addresses' => $addresses]);
    }

    public function update(Request $request, $id)
    {
        $addresses = Endereco::findOrFail($id);

        $addresses->update($request->all());

        // return "Atualizado!";
        return redirect()->back()->withInput();
    }

    public function destroy($id)
    {
        $addresses = Endereco::findOrFail($id);
        $addresses->delete();
        // return "Endereço excluído com sucesso";
        return redirect()->back()->withInput();
    }
}
