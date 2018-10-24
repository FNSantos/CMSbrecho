
function uploadImagem(){
    
    imagem = $('input[type=file]').val();
    
    
    $.post(rota, {

        classe:"Upload Imagem",
        acao:"inserir",
        nome:imagem,       

    }).done(function(dados){

         alert(dados);

    });
}

