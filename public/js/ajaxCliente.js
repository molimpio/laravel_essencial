/*arquivo js ligado a view cliente, monta toda a logica do CRUD*/
$(document).ready(function () {
    /*cria o dataTable*/
    $('#table_cliente').dataTable({
        "scrollCollapse": true,
        "paging": true,
        "oLanguage": {
            "sUrl": "/pt-br.txt"
        }
    });

    /*faz a seleção da linha no dataTable*/
    var table = $('#table_cliente').DataTable();
    $('#table_cliente tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    /*click do botao novo, limpa os campos e chama o modal*/
    $("#btn-novo").click(function () {

        $("#id").val("");
        $("#nome").val("");
        $("#email").val("");

        $('#myModal').modal({
            show: 'true'
        });
    });

    /*
     * ajax para salvar ou atualizar os dados
     * verifico se existe id no form modal
     */
    $("#btn-cadastrar").click(function () {
        $("form").on("submit", function (event) {
            event.preventDefault();

            /*token, id, nome, email ->dataCliente*/
            var dataCliente = $(this).serializeArray();
            var id = dataCliente[1].value;
            var url = "";

            if (id !== "") {
                /*existe id, update dos dados*/
                url = "clienteUpdate/" + id;
            } else {
                /*sem id, insert dos dados*/
                url = "clienteSave";
            }

            $.ajax({
                url: url,
                type: "POST",
                dataType: 'json',
                data: dataCliente,
                success: function () {
                    window.location.href = 'clientes';
                },
                error: function () {
                    alert("Ocorreu um erro ao cadastrar os dados");
                }
            });
        });
    });

    /*
     * click do botão editar, verifica se existe linha selecionada
     * caso sim passa os dados para o modal e permite a edição
     */
    $('#btn-editar').click(function () {
        var linhaSelecionada = table.rows('.selected').data();
        if (linhaSelecionada.length === 0) {
            alert("Clique em uma linha da tabela para selecionar o registro!");
            return;
        } else {
            /*editar dados*/
            var id = "";
            var nome = "";
            var email = "";

            $.map(table.rows('.selected').data(), function (item) {
                id = item[0];
                nome = item[1];
                email = item[2];
            });

            /*setando os valores*/
            $("#id").val(id);
            $("#nome").val(nome);
            $("#email").val(email);

            /*modal*/
            $('#myModal').modal({
                show: 'true'
            });

        }
    });

    /* click botao remover*/
    $('#btn-excluir').click(function () {
        var linhaSelecionada = table.rows('.selected').data();
        if (linhaSelecionada.length === 0) {
            alert("Clique em uma linha da tabela para selecionar o registro!");
            return;
        } else {
            var id = "";
            var nome = "";
            $.map(table.rows('.selected').data(), function (item) {
                id = item[0];
                nome = item[1];
            });

            var resposta = confirm("Deseja excluir o registro do cliente " + nome + " ?");

            if (resposta === true) {

                $.ajax({
                    url: 'clienteDestroy/' + id,
                    type: "GET",
                    dataType: 'json',
                    data: id,
                    success: function () {
                        window.location.href = 'clientes';
                    },
                    error: function () {
                        alert("Ocorreu um erro ao cadastrar os dados");
                    }
                });
            }
        }
    });
}); 