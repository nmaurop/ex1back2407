<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicoResource extends JsonResource
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
            'Disponibilidade:' => $this->disponibilidade,
            'Preco: R$ '=> $this->preco,
            'Tipo:' => $this->quantidade
        ];
    }
}
