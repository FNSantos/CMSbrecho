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

        classe:"Filtro",
        acao:"inserir",
        nome:$("#txt_nome").val(),
        id_tipo_filtro:$("#slt_tipo_filtro option:selected").val(),
        
    }).done(function(dados){

        // alert(dados);

        $("#txt_nome").val("");

        obterTodos();

    });

}

function obterTodos(){

    $.post(rota, {

        classe:"Filtro",
        acao:"obterTodos"

    }).done(function(dados){

        $("#list_levels").html(dados);

    });

}

function obterTipoFiltro(){

    $.post(rota, {

        classe:"Filtro",
        acao:"obterTipoFiltro"

    }).done(function(dados){

        $(".select_tipo_filtro").html(dados);

    });

}

function obterUm(idFiltro){

    // alert("!!!!!!!!!!!");

    $.post(rota, {

        classe:"Filtro",
        acao:"obterUm",
        id:idFiltro,
        

    }).done(function(dados){

        // alert(dados);

        let filtro = JSON.parse(dados);

        $("#txt_nome").val(filtro["nome"]);
        
        $("#stl_tipo_nivel option:selected").val(filtro["id_estilo"]);

        $("#btn_cancelar").css({"display":"block"});

        modo = "atualizar";

        $("#btn_salvar").html("Atualizar");

    })

}

function atualizar(){

    $.post(rota, {

        classe:"Filtro",
        acao:"atualizar",
        nome:$("#txt_nome").val(),
        id_tipo_filtro:$("#slt_tipo_filtro option:selected").val()

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

        classe:"Filtro",
        acao:"atualizarSituacao",
        id:id,
        situacao: (situacao == 0 ? 1 : 0)

    }).done(function(dados){

        

        obterTodos();

    });

}

function remover(idFiltro){

    $.post(rota, {

        classe:"Filtro",
        acao:"remover",
        id: idFiltro

    }).done(function(dados){

        obterTodos();

    });

}

$(document).ready(function(){

    obterTipoFiltro();
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