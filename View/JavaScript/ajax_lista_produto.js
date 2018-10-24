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


function obterTodos(){
    
    $.post(rota, {

        classe:"Produto",
        acao:"obterTodos"

    }).done(function(dados){

        $("#produtos").html(dados);

    });

}

function obterUm(idCategoria){

    // alert("!!!!!!!!!!!");

    $.post(rota, {

        classe:"Produto",
        acao:"obterUm",
        id:idCategoria

    }).done(function(dados){

        // alert(dados);

        let nivel = JSON.parse(dados);

        $("#txt_nome").val(nivel["nome"]);

        $("#btn_cancelar").css({"display":"block"});

        modo = "atualizar";

        $("#btn_salvar").html("Atualizar");

    })

}


function atualizarSituacao(id, situacao){

    $.post(rota, {

        classe:"Produto",
        acao:"atualizarSituacao",
        id:id,
        situacao: (situacao == 1 ? 0 : 1)

    }).done(function(dados){

        // alert(dados);

        obterTodos();

    });

}

function remover(idProduto){
    alert(idProduto);
    $.post(rota, {

        classe:"Produto",
        acao:"remover",
        id: idProduto

    }).done(function(dados){

        obterTodos();

    });

}

$(document).ready(function(){

    obterAutenticacao();

    obterTodos();
   
});
