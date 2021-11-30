<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable = [
        "nome",
        "telefone",
        "cpf_cnpj",
        "cep",
        "rua",
        "bairro",
        "cidade",
        "estado",
        "ibge"
    ];
}
