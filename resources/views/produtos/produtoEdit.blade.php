@extends('app')
@section('content')
<div class="container">
    <h1>Atualizar Produto</h1>    
    <div class="row">
        <div class="col-md-4">
            @if(count($errors) > 0)
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li style="margin-left: 20px;">{{ $error }}</li>
                @endforeach
            </ul>
            @endif  
        </div>
    </div>    
    {!! Form::open(['url' => "produtoUpdate/$produto->id"]) !!}     
    <div class="form-group">
        <label>Nome</label>
        {!! Form::text('nome', $produto->nome, ['class' => 'form-control', 'placeholder' => 'Nome do produto']) !!}
    </div>
    <div class="form-group">
        <label>Descrição</label>
        {!! Form::textarea('descricao', $produto->descricao, ['class' => 'form-control', 'placeholder' => 'Descrição do produto']) !!}
    </div>   
    <div class="form-group">
        {!! Form::submit('Atualizar Produto', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection