<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Funcionários</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <link type="text/css" rel="stylesheet" href="CSS/style_historico_produto.css">
        <script src="JavaScript/jquery-3.3.1.js"></script>
        <script src="JavaScript/ajax_funcionario_crud.js"></script>
    </head>
    <body>
        <?php require_once("cabecalho.php")?>
        <div id="main">
            <div id="main_content">
                <?php require_once("menu.php") ?>
                <div id="content">
                    <div class="title_content" style="float:none;">
                        Historico do produto
                    </div>
                    <div id="imagem_produto" style="float:left;"></div>
                    <div class="descricoes" style="margin-top:50px;">
                        Nome do Produto
                    </div> 
                    <div class="descricoes">
                        Preco
                    </div>
                    <div class="descricoes">
                        Cor 
                    </div>
                    
                    <div id="linha_label">
                        <div class="label">Data</div>
                        <div class="label">Status</div>
                        <div class="label">Descricao</div>
                    </div>
                    <div class="linhas"></div>

                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
