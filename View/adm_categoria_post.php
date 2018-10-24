<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Categoria da Postagem</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <link type="text/css" rel="stylesheet" href="CSS/style_niveis.css">
        <script src="JavaScript/jquery-3.3.1.js"></script>
        <script src="JavaScript/ajax_categoria_post_crud.js"></script>
    </head>
    <body>
        <?php require_once("cabecalho.php")?>
        <div id="main">
            <div id="main_content">
                <?php require_once("menu.php") ?>
                <div id="content">
                    <div class="title_content" id="title_content">
                        Gerenciamento das Categorias de Postagem
                    </div>
                    <div id="register_content">
                        <div class="title_input" style="font-family:Arial;font-size:16pt;">
                            Nome
                        </div>
                        <input type="text" name="txt_nome" id="txt_nome" placeholder="Digite a categoria da postagem" class="input_text" style="width:350px;">
                        <button name="btn_salvar" id="btn_salvar" class="buttons" style="margin-top:10px;">Salvar</button>
                        <button name="btn_cancelar" id="btn_cancelar" class="buttons" style="margin-top:10px;display:none;float:left;margin-right:10px;">Cancelar</button>
                    </div>
                    <table id="list_levels" style="width:400px;margin-right:0px;margin-left:420px;">
                    </table>
                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
