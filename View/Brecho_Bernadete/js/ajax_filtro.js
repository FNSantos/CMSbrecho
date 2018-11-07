let rota = "../../router.php"

let moto = ""

function obterFiltro(id_tipo_filtro){

    $.post(rota, {

        classe:"produto",
        acao:"obterFiltro",
        id_tipo_filtro: id_tipo_filtro

    }).done(function(dados){

        if(id_tipo_filtro == 1){
            $("#combo_marca").html(dados);
        }else if(id_tipo_filtro == 2){
            $("#combo_cor").html(dados);
        }else if(id_tipo_filtro == 3){
            $("#combo_tamanho").html(dados);
        }


    });

}

function obterCategorias(){

    $.post(rota, {

        classe:"Subcategoria",
        acao:"obterCategorias"

    }).done(function(dados){
        $("#categoria").html(dados);

    });

}

$(document).ready(function(){

    obterFiltro(1);
    obterFiltro(2);
    obterFiltro(3);
    obterCategorias()

});
