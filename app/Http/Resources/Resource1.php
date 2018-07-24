<?php
/* Resource controller associada a PRODUTOS */
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
        return [ 'nome' => $this->nome,
        'tipo' => $this->tipo,
        'preco'=> $this->preco,
        'quantidade' => $this->quantidade,
        'Criado em:' => $this->created_at
        ];
    }
}
