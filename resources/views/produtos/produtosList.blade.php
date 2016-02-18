@extends('app')
@section('content')
<div class="container">
    <h1>Produtos</h1>
    <ul>
        @foreach($produtos as $produto)
        <li>{{$produto->nome}} {{$produto->descricao}}</li>
        @endforeach
    </ul>
</div>
@endsection