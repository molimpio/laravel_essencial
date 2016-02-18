@extends('app')
@section('content')
<div class="container">   
    <div class="form-inline">
        <div class="form-group">
            <h1>Produtos</h1>  
        </div>
        <div class="form-group">
            &nbsp;&nbsp;&nbsp;<a href="produtoCreate" class="btn btn-primary" style="margin-top: 15px;">
                Novo Produto&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span>
            </a>
        </div>                    
    </div>      

    <table class="table table-bordered table-hover table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>
                    <a href="{{ url('produtoDestroy', $produto->id) }}" class="btn btn-danger">
                        Remover&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection