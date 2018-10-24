<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Cadastro de Funcionário</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <link type="text/css" rel="stylesheet" href="CSS/style_adm_postagem_blog.css">
        <script src="JavaScript/jquery-3.3.1.js" charset="utf-8"></script>
        <script src="JavaScript/ajax_blog_postagem_crud.js" charset="utf-8"></script>
    </head>
    <body>
        <?php require_once("cabecalho.php")?>
        <div id="main" style="min-height:2000px;">
            <div id="main_content" style="overflow:auto;" >
                <?php require_once("menu.php") ?>
                <div id="content" style="">
                    <div class="title_content" style="float:none;" >
                        Postagem Blog                         
                    </div>
                    <a href="cadastro_postagem_blog.php" > 
                        <button id="btn_cadastrar" class="buttons" style="float:right;margin-top:-20px; margin-right:120px; ">Cadastrar</button>
                    </a>
                   
                    <div id="conteudo" data-my-target="blogPostagem" >
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
