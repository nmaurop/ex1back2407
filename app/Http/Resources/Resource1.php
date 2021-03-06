<?php
/* Resource associada a PRODUTOS */
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Resource1 extends JsonResource
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
            'Tipo:' => $this->tipo,
            'Preco: R$ '=> $this->preco,
            'Quantidade' => $this->quantidade,
            'Criado em:' => $this->created_at
        ];
    }
}
