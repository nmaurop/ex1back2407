<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ParceiroResource extends JsonResource
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
            'Nome:' => $this->nome,
            'Endereco:' => $this->endereco,
            'CNPJ:'=> $this->cnpj,
            'Quantia investida: R$ ' => $this->investimento,
            'Registro da parceria:' => $this->created_at
        ];
    }
}
