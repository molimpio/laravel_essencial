<?php

namespace laravel_essencial\Http\Controllers;

use laravel_essencial\Cliente;
use laravel_essencial\Http\Controllers\Controller;
use Request;

class ClientesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes/clienteList', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function save()
    {        
        
        $dados = Request::all();
        Cliente::create($dados);
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
