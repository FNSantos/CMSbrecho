let rota = "../../router.php"

let moto = ""

function obterTodosSite(){

  $.post(rota, {

      classe:"comunidade",
      acao:"obterTodosSite"

  }).done(function(dados){

      $(".caixa_organizadora").html(dados);
      //alert(dados);
  });

}

$(document).ready(function(){

    obterTodosSite();


});
