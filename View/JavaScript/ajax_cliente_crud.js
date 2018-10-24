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

        classe:"Cliente",
        acao:"obterTodos"

    }).done(function(dados){

        $("#list_levels").html(dados);

    });

}

function obterUm(id){

    $(".container").fadeIn(400);
    
    $.post(rota, {

        classe:"Cliente",
        acao:"obterUm",
        id:id

    }).done(function(dados){
        
        
        let cliente = JSON.parse(dados);
        
        $("#txt_nome").text(cliente["nome"]);
        $("#txt_celular").text(cliente["celular"]);
        $("#txt_data").text(cliente["data_nascimento"]);
        $("#txt_cpf").text(cliente["cpf"]);
        
        if(cliente["genero"] == "M"){
            $("#txt_genero").text("Masculino");
        }else{
            $("#txt_genero").text("Feminino");
        }
        
        $("#txt_email").text(cliente["email"]);
        $("#txt_endereco").text(cliente["endereco"]);

        
        //$("#txt_nome").val(dados);
    })

}

function atualizarSituacao(id, situacao){

    $.post(rota, {

        classe:"Cliente",
        acao:"atualizarSituacao",
        id:id,
        situacao: (situacao == 1 ? 0 : 1)

    }).done(function(dados){

        // alert(dados);

        obterTodos();

    });

}

$(document).ready(function(){

    //obterAutenticacao();

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
