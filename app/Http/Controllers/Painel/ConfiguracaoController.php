<?php

namespace App\Http\Controllers\Painel;

use App\Admin\Configuracao;
use Illuminate\Http\Request;

class ConfiguracaoController extends Controller
{
    /**
     * Listagem de todos os recursos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Exibe o formulario para criar um recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Salva um determinado recurso no banco
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Exibe um determinado recurso
     *
     * @param  \App\Admin\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function show(Configuracao $configuracao)
    {
        //
    }

    /**
     * Mostrar o formulário para editar o recurso especificado.
     *
     * @param  \App\Admin\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuracao $configuracao)
    {
        //
    }

    /**
     * Faz o Update de um determinado recurso.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuracao $configuracao)
    {
        //
    }

    /**
     * Remove um recurso especifico.
     *
     * @param  \App\Admin\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuracao $configuracao)
    {
        //
    }
}
