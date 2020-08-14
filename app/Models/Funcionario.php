<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    /**
     * Faz conversão na hora da serialização
     *
     * @var array
     */
    protected $fillable = ['name', 'cpf', 'admissao', 'status'];

    /**
     * Faz conversão na hora da serialização
     *
     * @var array
     */
    protected $casts = [
        'admissao' => 'datetime:d-m-Y H:00',
        'demissao' => 'datetime:d-m-Y H:00',
        'created_at' => 'datetime:d-m-Y H:00',
        'updated_at' => 'datetime:d-m-Y H:00'
    ];
}
