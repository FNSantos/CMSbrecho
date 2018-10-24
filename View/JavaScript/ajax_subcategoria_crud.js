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

        classe:"Subcategoria",
        acao:"inserir",
        nome:$("#txt_nome").val(),
        id_categoria:$("#slt_categoria").val()

    }).done(function(dados){

        // alert(dados);

        $("#txt_nome").val("");

        obterTodos();

    });

}

function obterTodos(){

    $.post(rota, {

        classe:"Subcategoria",
        acao:"obterTodos"

    }).done(function(dados){

        $("#list_levels").html(dados);

    });

}

function obterCategorias(){

    $.post(rota, {

        classe:"Subcategoria",
        acao:"obterCategorias"

    }).done(function(dados){

        $(".select_subcategoria").html(dados);

    });

}

function obterUm(idSubcategoria){

    // alert("!!!!!!!!!!!");

    $.post(rota, {

        classe:"Subcategoria",
        acao:"obterUm",
        id:idSubcategoria

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

        classe:"Subcategoria",
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

        classe:"Subcategoria",
        acao:"atualizarSituacao",
        id:id,
        situacao: (situacao == 1 ? 0 : 1)

    }).done(function(dados){

        // alert(dados);

        obterTodos();

    });

}

function remover(idSubcategoria){

    $.post(rota, {

        classe:"Subcategoria",
        acao:"remover",
        id: idSubcategoria

    }).done(function(dados){

        obterTodos();

    });

}

$(document).ready(function(){

    obterCategorias();
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