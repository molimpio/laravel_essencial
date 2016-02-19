@extends('app')
@section('content')
<div class="container">   
    <div class="form-inline">
        <div class="form-group">
            <h1>Clientes</h1>  
        </div>
        <div class="form-group">
            &nbsp;&nbsp;&nbsp;<button href="#" id="modal" class="btn btn-primary" style="margin-top: 15px;">
                Novo Cliente&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span>
            </button>
        </div>                    
    </div>      
    <table class="table table-bordered table-hover table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td width="20%">
                    <a href="{{ url('produtoDestroy', $cliente->id) }}" class="btn btn-danger">
                        Remover&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span>
                    </a>
                    <a href="{{ url('produtoEdit', $cliente->id) }}" class="btn btn-primary">
                        Editar&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
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
                {!! Form::open(['url' => 'produtoStore']) !!}     
                <div class="form-group">
                    <label>Nome</label>
                    {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome...']) !!}
                </div>
                <div class="form-group">
                    <label>Email</label>
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email...']) !!}
                </div>                
            </div>
            <div class="modal-footer">                
                {!! Form::submit('Cadastrar Cliente', ['class' => 'btn btn-primary', 'id' => 'btn-cadastrar']) !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
            {!! Form::close() !!}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
    $(document).ready(function () {
        $("#modal").click(function () {
            $('#myModal').modal({
                show: 'true'
            });
        });
        $("#btn-cadastrar").click(function () {
            $("form").on("submit", function (event) {
                event.preventDefault();
                var dataCliente = $(this).serializeArray();                
                
                var url = "{{ URL::to('clienteSave')}}";
                $.ajax({
                    url: url,
                    type: "POST",
                    dataType: 'json',
                    data: dataCliente,
                    success: function (result) {

                        console.table(result);
                    },
                    error: function () {
                        alert("Ocorreu um erro ao cadastrar os dados");
                    }
                });
                
            });
        });

    });
</script>
@endsection