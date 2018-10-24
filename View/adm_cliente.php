<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Cliente</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <link type="text/css" rel="stylesheet" href="CSS/style_niveis.css">
        <script src="JavaScript/jquery-3.3.1.js"></script>
        <script src="JavaScript/ajax_cliente_crud.js"></script>
              
        <style>
            
            /* Modal */

            .container{
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 999;
                position: fixed;
                display: none;
            }

            .modal{
                height: 700px;
                width: 1000px;
                background-color: #ffffff;
                margin-left: auto;
                margin-right: auto;
                margin-top: 100px;
                border-radius: 10px;
            }


        </style>
        
    </head>
    <body>
        <div class="container">
            <div class="modal">
                <?php require_once("modal.php") ?>
            </div>
        </div>
        <?php require_once("cabecalho.php")?>
        <div id="main">
            <div id="main_content">
                <?php require_once("menu.php") ?>
                <div id="content">
                    <div class="title_content" id="title_content">
                       Cliente
                    </div>
                    
                    <table id="list_levels" style="width:900px;margin-right:auto;margin-left:auto;">
                    </table>
                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
