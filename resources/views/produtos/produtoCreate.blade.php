@extends('app')
@section('content')
<div class="container">
    <h1>Novo Produto</h1>
    {!! Form::open(['url' => 'produtoStore']) !!}     
    <div class="form-group">
        <label>Nome</label>
        {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome do produto']) !!}
    </div>
    <div class="form-group">
        <label>Descrição</label>
        {!! Form::textarea('descricao', null, ['class' => 'form-control', 'placeholder' => 'Descrição do produto']) !!}
    </div>   
    <div class="form-group">
        {!! Form::submit('Cadastrar Produto', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection