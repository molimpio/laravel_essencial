@extends('app')
@section('content')
<script src="/js/ajaxCliente.js"></script>
<div class="container">   
    <div class="row">
        <div class="col-md-4">
            <h1>Cadastro de Clientes</h1>  
        </div>
        <div class="col-md-4" style="margin-top: 25px;">
            <button id="btn-novo" class="btn btn-primary">Novo&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span></button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button id="btn-editar" class="btn btn-warning">Editar&nbsp;&nbsp;<span class="glyphicon glyphicon-pencil"></span></button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button id="btn-excluir" class="btn btn-danger">Excluir&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span></button>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>     
    <br/>    
    <table id="table_cliente" class="table table-bordered table-hover table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>         
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>                
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
<!--modal-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cadastro de Cliente</h4>
            </div>
            <div class="modal-body">
                {!! Form::open() !!}     
                {!! Form::hidden('id', 'null', ['id' => 'id']) !!}
                <div class="form-group">
                    <label>Nome</label>
                    {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome...', 'id' => 'nome']) !!}
                </div>
                <div class="form-group">
                    <label>Email</label>
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email...', 'id' => 'email']) !!}
                </div>                
            </div>
            <div class="modal-footer">                    
                {!! Form::submit('Salvar Dados', ['class' => 'btn btn-success', 'id' => 'btn-cadastrar']) !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
            {!! Form::close() !!}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection