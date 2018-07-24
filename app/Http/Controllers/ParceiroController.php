<?php

namespace App\Http\Controllers;

use App\Parceiro;
use Illuminate\Http\Request;
use App\Http\Resources\ParceiroResource;

class ParceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showResource(){
        return new ParceiroResource(Parceiro::find(2));
    }
    public function index()
    {
        $parceiros = Parceiro::all();
        return $parceiros;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parceiro = new Parceiro;

        $parceiro->nome = $request->nome;
        $parceiro->endereco = $request->endereco;
        $parceiro->cnpj = $request->cnpj;
        $parceiro->investimento = $request->investimento;
        

        $parceiro->save();
        return $parceiro;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function show(Parceiro $parceiro)
    {
        return $parceiro;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parceiro $parceiro)
    {

        $parceiro->nome = $request->nome;
        $parceiro->endereco = $request->endereco;
        $parceiro->cnpj = $request->cnpj;
        $parceiro->investimento = $request->investimento;

        $parceiro->save();
        return $parceiro;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parceiro $parceiro)
    {
        $parceiro->delete();
        return 'Parceiro deletado com sucesso.';
    }
}
