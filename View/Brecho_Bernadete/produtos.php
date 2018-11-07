<!DOCTYPE html>
<html>
<head>
	<title>Brechó Bernadete | Produtos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_produtos.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/ajax_filtro.js"></script>
</head>
<body>

<header>

 <?php include("header.php");?>

</header>

<div id="main_produtos" style="padding-top:100px;">

    <section id="slider">
        <div id="botao_esquerda">
            <button class="botao_seta" onclick="plusDivs(-1)"><img alt="seta" src="imagens/produtos/esquerda.png" width="150" height="150"></button>
        </div>

            <div id="caixa_slider">
                <link rel="stylesheet" type="text/css" href="css/style.css">

                <!-- criando elementos com o mesmo nome de classe: -->

                <img alt="produto" class="mySlides" src="imagens/produtos/slider4.png" height="600" width="100%" >
                <img alt="produto" class="mySlides" src="imagens/produtos/slider6.png" height="600" width="100%" >
                <img alt="produto" class="mySlides" src="imagens/produtos/slider7.png" height="600" width="100%" >

                <!-- criando dois botões para rolar as imagens: -->


                <!-- Adicionando um JavaScript para selecionar imagens: -->
                <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = x.length} ;
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex-1].style.display = "block";
                }

                var slideIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                      x[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > x.length) {slideIndex = 1}
                    x[slideIndex-1].style.display = "block";
                    setTimeout(carousel, 4000); // Change image every 4 seconds
                }

                </script>

            <div id="botao_direita">
                <button class="botao_seta"  class="w3-button w3-display-right" onclick="plusDivs(+1)"> <img alt="seta" src="imagens/produtos/direita.png" width="150" height="150"></button>
            </div>

            </div>

    </section>

    <div class="campo_cadastro">
        <div class="titulo_cadastro"></div>

        <div class="input_cadastro">
            <img src="imagens/produtos/lupa.png">
            <input type="text" name="" class="inputs" size="25" maxlength="30" value="" laceholder="" >
        </div>
    </div>

    <div id="menu_filtros">
        <div id="categoria" class="filtros" style="margin-left: 45px;" >
            
        </div>

        <div class="filtros_m">

         <select   class="filtros" id="combo_marca">

            </select>
        </div>

        <div class="filtros">
            <select class="filtros" id="combo_tamanho">
            </select>
        </div>

        <div class="filtros">
            <select class="filtros" id="combo_cor">
            </select>
        </div>

        <div class="filtros">
        Preço
        </div>

        <div id="limpar_filtro">
        Limpar Filtro
        </div>
    </div>


    <div class="caixa_organizadora">

        <div class="caixa_produto">
            <a href="detalhe_produto.php">
            <div class="imagem_produto">

                <div class="img_produto">

                    <img src="imagens/produtos/blusa%20em%20cetim.jpg" width="280" height="340"
	               onMouseOver="this.src='imagens/produtos/blusa%20em%20cetim1.jpg'" width="280" height="340"
	               onMouseOut="this.src='imagens/produtos/blusa%20em%20cetim.jpg'" width="280" height="340"
	               >

				</div>

            </div>

            <div class="descricao_produto">

                 Blusa em cetim
            </div>
            <div class="descricao_produto"          </>
                R$ 39,99
            </div>

        </div>

        <div class="caixa_produto">
            <a href="detalhe_produto.php">
            <div class="imagem_produto">

                   <img src="imagens/produtos/regata.jpg" width="280" height="340"
	               onMouseOver="this.src='imagens/produtos/regata1.jpg'" width="280" height="340"
	               onMouseOut="this.src='imagens/produtos/regata.jpg'" width="280" height="340">


            </div>

            <div class="descricao_produto">

                 Regata
            </div>
            <div class="descricao_produto">
                R$ 19,99
            </div>

        </div>          </a>

        <div class="caixa_produto">
            <a href="detalhe_produto.php">
            <div class="imagem_produto">

                   <img src="imagens/produtos/body%20bicolor1.jpg" width="280" height="340"
	               onMouseOver="this.src='imagens/produtos/body%20bicolor2.jpg'" width="280" height="340"
	               onMouseOut="this.src='imagens/produtos/body%20bicolor1.jpg'" width="280" height="340">



            </div>

            <div class="descricao_produto">

                 Body Bicolor
            </div>
            <div class="descricao_produto">
                R$ 49,99
            </div>
            </a>
        </div>

        <div class="caixa_produto">
        <a href="detalhe_produto.php">


            <div class="imagem_produto">
                   <img src="imagens/produtos/blazer%20listrado.jpg" width="280" height="340"
	               onMouseOver="this.src='imagens/produtos/blazer%20listrado1.jpg'" width="280" height="340"
	               onMouseOut="this.src='imagens/produtos/blazer%20listrado.jpg'" width="280" height="340">

            </div>

            <div class="descricao_produto">

                 Blazer Listrado
            </div>
            <div class="descricao_produto">
                R$ 45,99
            </div>
        </a>

        </div>

        <div class="caixa_produto">
            <a href="detalhe_produto.php">
            <div class="imagem_produto">

                   <img src="imagens/produtos/vestido%20longo.jpg" width="280" height="340"
	               onMouseOver="this.src='imagens/produtos/vestido%20longo1.jpg'" width="280" height="340"
	               onMouseOut="this.src='imagens/produtos/vestido%20longo.jpg'" width="280" height="340">

            </div>

            <div class="descricao_produto">

                 Vestido Longo
            </div>
            <div class="descricao_produto">
                R$ 69,99
            </div>

        </div>
            </a>
        <div class="caixa_produto">
            <a href="detalhe_produto.php">
            <div class="imagem_produto">

                <img src="imagens/produtos/jaqueta%20lisa.jpg" width="280" height="340"
	               onMouseOver="this.src='imagens/produtos/jaqueta%20lisa1.jpg'" width="280" height="340"
	               onMouseOut="this.src='imagens/produtos/jaqueta%20lisa.jpg'" width="280" height="340">

            </div>

            <div class="descricao_produto">

                 Jaqueta Lisa
            </div>
            <div class="descricao_produto">
                R$ 59,99
            </div>

        </div>

        <div class="caixa_produto">
            <a href="detalhe_produto.php">
            <div class="imagem_produto">


                   <img src="imagens/produtos/blusa%20saia%20xadrez%203.jpg" width="280" height="340"
	               onMouseOver="this.src='imagens/produtos/blusa%20saia%20xadrez4.jpg'" width="280" height="340"
	               onMouseOut="this.src='imagens/produtos/blusa%20saia%20xadrez%203.jpg'" width="340" height="360">



            </div>

            <div class="descricao_produto">

                 Blusa Saia Xadrez
            </div>
            <div class="descricao_produto"          </>
                R$ 49,99
            </div>

        </div>

        <div class="caixa_produto">
            <a href="detalhe_produto.php">
            <div class="imagem_produto">

                <img src="imagens/produtos/bolinha%20amarela%203.jpg" width="280" height="340"
	               onMouseOver="this.src='imagens/produtos/bolinha%20amarela.jpg'" width="280" height="340"
	               onMouseOut="this.src='imagens/produtos/bolinha%20amarela%203.jpg'" width="280" height="340">


            </div>

            <div class="descricao_produto">

                Camisa de Bolinha Amarela
            </div>
            <div class="descricao_produto">
                R$ 34,99
            </div>
            </a>
        </div>

        <div class="caixa_produto">
            <a href="detalhe_produto.php">
            <div class="imagem_produto">

                <img src="imagens/produtos/jaqueta%20suedine.jpg" width="280" height="340"
	               onMouseOver="this.src='imagens/produtos/jaqueta%20suedine1.jpg'" width="280" height="340"
	               onMouseOut="this.src='imagens/produtos/jaqueta%20suedine.jpg'" width="280" height="340">


            </div>

            <div class="descricao_produto">

                 Jaqueta Suedine
            </div>
            <div class="descricao_produto">
                R$ 49,99
            </div>

        </div>          </a>

         <div class="mais_produtos">
            <input id="input_produtos" type="submit" value="Carregar mais produtos" name="btn_carregar_produtos">

         </div>


    </div>

</div>

<footer>

    <div id="rodape">

        <?php include("footer.php");?>

    </div>

</footer>

</body>

</html>
