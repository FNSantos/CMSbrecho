<!DOCTYPE html>
<html>
<head>
	<title>Brechó Bernadete | Comunidade</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_comunidade.css">
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/ajax_comunidade.js"></script>
    <script>
            $(document).ready(function(){
                $("#botao_participe").click(function(){
                    $(".container").fadeIn(400);
                });

            });

    </script>

</head>
<body>

    <?php include("header.php");?>

<div class="container">
        <div class="modal">
                       <?php require_once('modal.php');?>
        </div>
    </div>
<div id="main_comunidade" style="padding-top: 150px;">

    <div class="caixa_comunidade">
        <div id="titulo">
            Comunidade
        </div>

        <div id="descricao">
            Estamos aqui para compartilhar ideias e dizer sobre a felicidade. Sinta-se avontade e faça parte dessa comunidade.

        </div>

        <div id="botao_participe">

            <input id="input_participe" type="submit" value="Participe" name="btn_participar">
        </div>

    </div>

    <div class="caixa_organizadora">


    </div>




        <div class="mais_comentarios">
            <input id="input_coment" type="submit" value="Carregar mais comentários" name="btn_carregar_coment">

         </div>




</div>

<footer>

  <?php include("footer.php");?>

</footer>

</body>

</html>
