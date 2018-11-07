
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style_modal.css" rel="stylesheet" type="text/css">
        <script>
            $(document).ready(function(){
               $(".fechar").click(function(){
                   //Faz a div container ser aberta na tela usando um efeito
                   //slideToggle, toggle, FadeIn, slideDown, etc...
                  $(".container").fadeOut(400);

                });

            });

        </script>
    </head>
    <body>

        <div id="header_modal">
            Adicione um Post

        </div>

        <div id="content_modal">
            <div style="float:left;">
                <div id="titulo">
                 Nome:
                <input type="text" style="height:50px; width:500px; resize:none">
                </div>
                <div id="texto">
                     <span >Texto:</span>
                    <textarea style="height:300px; width:500px; resize:none"></textarea>
                </div>
            </div>
            <form action="../../model/UploadImagem.php" name="frmComunidade" enctype="multipart/form-data">
            <div style="float:left; height:530px; width:400px;">
                <p style="text-align:center;">Selecione uma image para ser visualizada junto ao Post</p>
                <input type="file" >
                <div id="imagem_upload" style="margin:auto;"></div>
            </div>
            </form>

        </div>
        <div id="fechar">
            <input type="button" value="fechar" class="fechar">
        </div>

    </body>
</html>
