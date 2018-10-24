<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Funcionários</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <script src="JavaScript/jquery-3.3.1.js"></script>
        <script src="JavaScript/ajax_funcionario_crud.js"></script>
    </head>
    <body>
        <?php require_once("cabecalho.php")?>
        <div id="main">
            <div id="main_content">
                <?php require_once("menu.php") ?>
                <div id="content">
                    <div class="title_content">
                        Gerenciamento de Funcionários
                    </div>
                    <a href="cadastro_funcionario.php">
                        <button id="btn_cadastrar" class="buttons">Cadastrar</button>
                    </a>
                    <table id="table_content">
                    </table>
                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
