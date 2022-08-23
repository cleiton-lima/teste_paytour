<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    protected $fillable = [
        'curriculo_id',
        'nome',
        'email',
        'telefone',
        'cargo_desejado',
        'escolariade',
        'observacoes',
        'arquivo',
        'data_cadastro',
    ];
}
