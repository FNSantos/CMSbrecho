<!DOCTYPE html>
<html>
<head>
	<title>Venda</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_usuario_venda.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<header>
    <! Menu >

    <?php

        include("header.php");

    ?>

</header>

<div id="main">

    <div id="usuario_compras">
        <div id="menu_usuario">
            <a href="usuarioCompra.php" style="text-decoration: none;">
                <div class="opc_usuario" >Compras</div>
            </a>
            <a href="#" style="text-decoration: none;">
                <div class="opc_usuario" style="background-color: #696969;">Vendas</div>
            </a>
                <div class="opc_usuario"><a href="#" style="text-decoration: none;">Dados</a></div>
            <a href="usuarioCarrinho.php" style="text-decoration: none;" >
                <div class="opc_usuario">Carrinho de compras</div>
            </a>
        </div>

        <div class="compras_usuario">

            <div class="img_compras">
                <img src="imagens/imagens/jaqueta%20masculino%202.jpg" style="width: 100%; height: 100%;">
            </div>
            <div class="desc_compras">

            <p id="nomeProduto" style="font-weight: bold; font-size:28px;">Jaqueta Masculino</p>

                <p style="font-size:22px;">Cor: Preta
                </p>
                <p style="font-size:22px;">Tamanho: G
                </p>
                <p style="font-size:22px;">Preço: R$ 1109,99
                </p>

            </div>

        </div>

        <hr class="hr_compras">

        <div class="compras_usuario">

            <div class="img_compras">
                <img src="imagens/imagens/casaco%20masculino%201.jpg" style="width: 100%; height: 100%;">
            </div>
            <div class="desc_compras">

            <p style="font-weight: bold; font-size:28px;">Casaco Masculino</p>

                <p style="font-size:22px;">Cor: Azul e Vinho
                </p>
                <p style="font-size:22px;">Tamanho: G
                </p>
                <p style="font-size:22px;">Preço: R$ 550,00
                </p>

            </div>

        </div>

        <hr class="hr_compras">

        <div id="vermais_compras">
        <input id="btn_vermais" type="button" name="btn_vermaiscompras" value="Ver mais">

    </div>


    </div>



</div>

<footer>

    <?php

        include("footer.php");

    ?>

</footer>

</body>

</html>
