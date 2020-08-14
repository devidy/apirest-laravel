<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Funcionario extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            "name" => $this->name,
            "cpf" => $this->cpf,
            "status" => $this->status,
            "admissao" => $this->admissao,
            "demissao" => $this->demissao,
            "endereco" => $this->endereco,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
