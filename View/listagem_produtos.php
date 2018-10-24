<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Lista Produto</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <link type="text/css" rel="stylesheet" href="CSS/style_cadastro_postagem_blog.css">
        <script src="JavaScript/jquery-3.3.1.js" charset="utf-8"></script>
        <script src="JavaScript/ajax_lista_produto.js" charset="utf-8"></script>
        <style>
            
            .box_itens{
                height: 300px;
                width: 300px;
                border: 1px solid #000;
                float:left;
                background-color: aliceblue;
    
            }
            .icones{
                height: 50px;
                width: 50px;
                margin-left: 35px;
                float: left;
                margin-top: 80%;
            }
        
        </style>
    </head>
    <body>
        
        <?php require_once("cabecalho.php")?>
        <div id="main">
            <div id="main_content">
                <?php require_once("menu.php") ?>
                <div id="content">
                    <div class="title_content" style="float:none;">
                        Lista Produtos
                    </div>
                                       
                    <div class="line_input" style="height:400px; width:auto; background-color:red;">
                        <div class="content_input" style="height:50px;">
                                Descrição
                            </div>
                        <div id="produtos" class="content_input" style="height:323px; width:auto; background-color:black; overflow-x:auto;" >
                                                        
                        </div>
                    </div>
                    
             
                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
