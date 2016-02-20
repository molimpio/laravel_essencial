<?php

namespace laravel_essencial\Http\Controllers;

use laravel_essencial\Cliente;
use laravel_essencial\Http\Controllers\Controller;
use Request;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente', ['clientes' => $clientes]);
    }

    public function save()
    {

        $dados = Request::all();
        Cliente::create($dados);
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function update($id)
    {
       $dados = Request::all();
       Cliente::find($id)->update($dados);
       return response()->json("ok");       
    }

    public function destroy($id)
    {
        Cliente::find($id)->delete();
        return response()->json("ok");     
    }

}
