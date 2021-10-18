<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'comprador',
        'descricao',
        'preco_unitario',
        'quantidade',
        'endereco',
        'fornecedor'
    ];
}
