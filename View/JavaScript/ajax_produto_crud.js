let rota = "../router.php"

let modo = ""

function inserir(){
         
    $.post(rota, {

        classe:"produto",
        acao:"inserir",
        nome:$("#txtnome").val(),
        proposta_preco:$("#txtvalor").val(),
        descricao:$("#txtdesc").val(),
        marca:$("#combo_marca").val(),
        tamanho:$("#combo_tamanho").val(),
        cor:$("#combo_cor").val(),
        id_subcategoria:$("#combo_subcat").val(),
        id_situacao:$("#combo_estilo").val(),
       

    }).done(function(dados){

         alert(dados);

        $("#txt_nome").val("");

        //obterTodos();

    });

}

function obterEstilo(){
    
    $.post(rota, {
        
        classe:"produto",
        acao:"obterEstilo"
    
    }).done(function(dados){
    
        
        $("#combo_estilo").html(dados);
    
    });
    
}
function obterFiltro(id_tipo_filtro){
    
    $.post(rota, {
        
        classe:"produto",
        acao:"obterFiltro",
        id_tipo_filtro: id_tipo_filtro
    
    }).done(function(dados){
        console.log(dados);
        if(id_tipo_filtro == 1){
            $("#combo_marca").html(dados);    
        }else if(id_tipo_filtro == 2){
            $("#combo_cor").html(dados);
        }else if(id_tipo_filtro == 3){
            $("#combo_tamanho").html(dados);
        }
        
    
    });
    
}

function obterCategoria(){
    
    $.post(rota, {
        
        classe:"produto",
        acao:"obterCategoria"
        
    }).done(function(dados){
        
        
        $("#combo_categoria").html(dados);
        
    });
    
}

function obterSubcategoria(){
    
    $.post(rota, {
        
        classe:"produto",
        acao:"obterSubcategoria"
        
    }).done(function(dados){
        
        
        $("#combo_subcat").html(dados);
        
    });
    
}

function obterUm(idProduto){

    // alert("!!!!!!!!!!!");

    $.post(rota, {

        classe:"Produto",
        acao:"obterUm",
        id:idProduto

    }).done(function(dados){

        // alert(dados);

        let produto = JSON.parse(dados);

        $("#txtnome").val(produto["nome"]);
        $("#txtvalor").val(produto["proposta_preco"]);
        $("#txtdesc").val(produto["descricao"]);
        $("#combo_estilo").val(produto["id_estilo"]);
        $("#combo_categoria").val(produto["id_categoria"]);
        $("#combo_subcat").val(produto["id_subcategoria"]);

        $("#btn_cancelar").css({"display":"block"});

        modo = "atualizar";

        $("#btn_salvar").html("Atualizar");

    })

}

function atualizar(idProduto){

    $.post(rota, {

        classe:"produto",
        acao:"atualizar",
        nome:$("#txtnome").val(),
        valor:$("#txtvalor").val(),
        descricao:$("#txtdesc").val(),
        marca:$("#combo_marca").val(),
        tamanho:$("#combo_tamanho").val(),
        cor:$("#combo_cor").val(),
        id_subcategoria:$("#combo_subcat").val()


    }).done(function(dados){

        // alert(dados);

        obterTodos();

        $("#txtnome").val("");
        $("#txtvalor").val("");
        $("#txtdesc").val("");
        $("#combo_marca").val("");
        $("#combo_tamanho").val("");
        $("#combo_cor").val("");
        $("#combo_subcat").val("");

        $("#btn_cancelar").css({"display":"none"});

        $("#btn_salvar").html("Inserir");

        modo = "inserir"

    });

}

function remover(idProduto){

    $.post(rota, {

        classe:"produto",
        acao:"remover",
        id: idProduto

    }).done(function(dados){

        obterTodos();

    });

}

$(document).ready(function(){

    //obterTodos();
    obterEstilo();
    obterCategoria();
    obterSubcategoria();
    obterFiltro(1);
    obterFiltro(2);
    obterFiltro(3);

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
