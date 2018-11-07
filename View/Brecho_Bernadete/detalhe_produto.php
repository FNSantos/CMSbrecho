<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_detalhes_produto.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<header>

    <?php include("header.php");?>

</header>

<div id="main">

<div id="main_cont">



    <div class="superior">
        <div id="imagem_principal">
            <img src="imagens/imagens/1.jpg">
        </div>
        <div class="imagens"> </div>
        <div class="imagens"> </div>
        <div class="imagens"> </div>
        <div class="imagens"> </div>
    </div>
    <div class="superior">
        <div id="informacao">
            <div id="nome_produto">
                Blusa
            </div>
            <div id="tamanho">
                P
            </div>
            <div id="preco">
                R$ 500,00
            </div>
            <div id="opcao_pagamento">
                0x de 00,00*s/juros no cartão
            </div>
            <div id="comprar">
                <input type="submit" value="COMPRAR"/>
            </div>
        </div>
    </div>
    <div class="inferior">
        <div id="titulo">Detalhes</div>
        <div id="texto">Produto em perfeitas condiçoes</div>
    </div>


</div>
</div>

<footer>
	<?php include("footer.php");?>
</footer>

</body>

</html>
