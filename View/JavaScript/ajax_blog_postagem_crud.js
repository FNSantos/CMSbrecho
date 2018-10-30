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
    
    categoria = $("#slt_nivel :selected").val(),
            
    $.post(rota, {

        classe:"Blog Postagem",
        acao:"inserir",
        titulo:$("#txt_titulo").val(),
        descricao:$("#txt_descricao").val(),      
        categoria:categoria,
        caminho_imagem:$("#txt_imagem").val(),    
        texto:$("#txt_texto").val(),      

        confirmar:$("#txt_confirmar").val()

    }).done(function(dados){

        alert(dados);

    });

    window.location.href = 'adm_postagem_blog.php';

}


function atualizarSituacao(id, situacao){

    
    $.post(rota, {

        classe:"Blog Postagem",
        acao:"atualizarSituacao",
        id:id,
        situacao: (situacao == 1 ? 0 : 1)

    }).done(function(dados){

        // alert(dados);
        obterTodos();

    });

}

function obterTodos(){

    $.post(rota, {

        classe:"Blog Postagem",
        acao:"obterTodos"

    }).done(function(dados){

        $("#conteudo").html(dados);

    });

}

function obterCategoria(){
    $.post(rota, {

        classe:"Blog Postagem",
        acao:"obterCategorias"

    }).done(function(dados){

        // alert(dados);

        $("#slt_nivel").html(dados);

    });

}

function obterUm(){    

     
    $.post(rota, {

        classe:"Blog Postagem",
        acao:"obterUm",
        idPostBlog:$("#id_post").val(),

    }).done(function(dados){
        
        let PostBlog = JSON.parse(dados);
        console.log(PostBlog);
        $("#txt_titulo").val(PostBlog["titulo"]);
        $("#txt_descricao").val(PostBlog["descricao"]);
        $("#txt_texto").val(PostBlog["caminho_imagem"]);
        
        $('select#slt_nivel').find('option').each(function() {
            if($(this).val() == PostBlog["id_tipo_postagem"]){
                $(this).attr('selected', true);
            }
        });
        
        $("slt_nivel select").val(PostBlog["id_tipo_postagem"]);
        //$("#txt_descricao").val(PostBlog["id_tipo_postagem"]);
        modo = "atualizar";
    });

    
     
    
}

function atualizar(idPostBlog){
    
    categoria = $("#slt_nivel :selected").val(),
    
    $.post(rota, {

        classe:"Blog Postagem",
        acao:"atualizar",
        idPostBlog:idPostBlog,
        titulo:$("#txt_titulo").val(),
        descricao:$("#txt_descricao").val(),      
        categoria:categoria,
        caminho_imagem:$("#txt_imagem").val(),    
        texto:$("#txt_texto").val()
    }).done(function(dados){
        obterTodos();
       
    });
    modo = "inserir";
    window.location.href = 'adm_postagem_blog.php';

}

function remover(id){
    $.post(rota, {

        classe:"Blog Postagem",
        acao:"remover",
        idPostBlog: id,

    }).done(function(dados){

        obterTodos();

    });

}

$(document).ready(function(){

    var situacao = $('#conteudo').data('myTarget');
    if(situacao == "blogPostagem" ){
       obterTodos(); 
    }else{
        obterCategoria();
    }
    
    $("#btn_salvar").click(function(){

        if(modo == "atualizar"){

            atualizar();

        } else {

            inserir();

        }

    });
       
   
});
