@extends('app')
@section('content')
<div class="container">
    <h1>Novo Produto</h1>    
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