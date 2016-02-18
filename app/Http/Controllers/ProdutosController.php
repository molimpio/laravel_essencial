<?php

namespace laravel_essencial\Http\Controllers;

use laravel_essencial\Http\Controllers\Controller;
use laravel_essencial\Http\Requests\ProdutoRequest;
use laravel_essencial\Produto;

class ProdutosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos/produtoList', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('produtos/produtoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ProdutoRequest $request)
    {
        $input = $request->all();
        Produto::create($input);
        return redirect('produtos');
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
        Produto::find($id)->delete();
        return redirect('produtos');
    }

}
