<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;
use App\Http\Resources\ServicoResource;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showResource(){
        return new ServicoResource(Servico::find(2));
    }
    public function index()
    {
        $servicos = Servico::all();
        return $servicos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servico = new Servico;

        $servico->nome = $request->nome;
        $servico->disponibilidade = $request->disponibilidade;
        $servico->preco = $request->preco;
        $servico->tipo = $request->tipo;
        

        $servico->save();
        return $servico;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(Servico $servico)
    {
        return $servico;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servico $servico)
    {

        $servico->nome = $request->nome;
        $servico->disponibilidade = $request->disponibilidade;
        $servico->preco = $request->preco;
        $servico->tipo = $request->tipo;

        $servico->save();
        return $servico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servico $servico)
    {
        $servico->delete();
        return 'Servico deletado com sucesso.';
    }
}
