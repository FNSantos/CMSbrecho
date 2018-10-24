let rota = "../router.php"

let modo = ""

function obterAutenticacao(){

    $.post(rota, {

        classe:"funcionario",
        acao:"obterAutenticacao"

    }).done(function(dados){

        if(dados == ""){

            document.location.href = "http://localhost/CMS_Brecho/";

        }

    });

}

function inserir(){

    $.post(rota, {

        classe:"Estilo",
        acao:"inserir",
        nome:$("#txt_nome").val()

    }).done(function(dados){

        // alert(dados);

        $("#txt_nome").val("");

        obterTodos();

    });

}

function obterTodos(){

    $.post(rota, {

        classe:"Estilo",
        acao:"obterTodos"

    }).done(function(dados){

        $("#list_levels").html(dados);

    });

}

function obterUm(idEstilo){

    // alert("!!!!!!!!!!!");

    $.post(rota, {

        classe:"Estilo",
        acao:"obterUm",
        id:idEstilo

    }).done(function(dados){

        // alert(dados);

        let nivel = JSON.parse(dados);

        $("#txt_nome").val(nivel["nome"]);

        $("#btn_cancelar").css({"display":"block"});

        modo = "atualizar";

        $("#btn_salvar").html("Atualizar");

    })

}

function atualizar(){

    $.post(rota, {

        classe:"Estilo",
        acao:"atualizar",
        nome:$("#txt_nome").val()

    }).done(function(dados){

        // alert(dados);

        obterTodos();

        $("#txt_nome").val("");

        $("#btn_cancelar").css({"display":"none"});

        $("#btn_salvar").html("Inserir");

        modo = "inserir"

    });

}

function atualizarSituacao(id, situacao){

    $.post(rota, {

        classe:"Estilo",
        acao:"atualizarSituacao",
        id:id,
        situacao: (situacao == 1 ? 0 : 1)

    }).done(function(dados){

        // alert(dados);

        obterTodos();

    });

}

function remover(idEstilo){

    $.post(rota, {

        classe:"Estilo",
        acao:"remover",
        id: idEstilo

    }).done(function(dados){

        obterTodos();

    });

}

$(document).ready(function(){

    obterAutenticacao();

    obterTodos();

    $("#btn_salvar").click(function(){

        if(modo == "atualizar"){

            atualizar();

        } else {

            inserir();

        }

    });

    $("#btn_cancelar").click(function(){

        if(modo == "atualizar"){

            modo = "";
            $("#btn_salvar").html("Inserir");
            $("#btn_cancelar").css({"display":"none"});
            $("#txt_nome").val("");

        }

    });

});
