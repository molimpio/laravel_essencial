<?php

namespace laravel_essencial\Http\Controllers;

use laravel_essencial\Http\Controllers\Controller;
use laravel_essencial\Http\Requests\ProdutoRequest;
use laravel_essencial\Produto;

class ProdutosController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos/produtoList', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos/produtoCreate');
    }

    public function store(ProdutoRequest $request)
    {
        $input = $request->all();
        Produto::create($input);
        return redirect('produtos');
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos/produtoEdit', ['produto' => $produto]);
    }

    public function update(ProdutoRequest $request, $id)
    {
        $produto = Produto::find($id)->update($request->all());
        return redirect('produtos');
    }

    public function destroy($id)
    {
        Produto::find($id)->delete();
        return redirect('produtos');
    }

}
