<!DOCTYPE html>
<html>
<head>
	<title>Brechó Bernadete | Empresa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_empresa.css">
</head>
<body>

<header>

 <?php include("header.php");?>

</header>

<div id="main_empresa" style="padding-top: 100px;">

    <div class="imagem_principal_empresa">
     <img alt="produto" src="imagens/empresa/empresa.jpg">
    </div>

    <div class="titulo">
        Hitória
    </div>

    <div class="caixa_organizadora">

        <div id="imagem_historia">

        </div>


            <div id="texto_empresa">

                &nbsp Brechó Bernadete é uma startup criada por duas amigas sócias, Thais e Silvia, que em 2017 enxergaram o potencial em crescimento do mercado de brechós.
                <br><br>
                &nbsp A ideia da empresa veio ainda na faculdade época em que ambas frequentavam muitos brechós na cidade de são Paulo em busca de looks que ao mesmo tempo fossem fashion e baratos.
                <br><br>
                &nbsp A companhando a crescente deste mercado, perceberam o processo de goumertização dos brechós e viram uma oportunidade para começarem a vender roupas que elas já não usavam mais.
                <br><br>
                &nbsp Daí, nasceu o brechó Dona Filomena, cuja a ideia principal é oferecer peças retro e vintage, peças que não se encontram em qualquer lugar e também com um preço justo. Hoje o brechó possui um espaço modesto de 30m² e lá é realizado vendas físicas.
            </div>

    </div>



    <div class="titulo_loja">
        Nossa Loja
    </div>

    <div class="organiza_conteudo_empresa">



            <section id="slider">
                <div id="botao_esquerda">
                    <button class="botao_seta" onclick="plusDivs(-1)"><img alt="seta" src="imagens/empresa/esquerda.png" width="100" height="100"></button>
                </div>

                <div id="caixa_slider">
                    <link rel="stylesheet" type="text/css" href="css/style.css">

                <!-- criando elementos com o mesmo nome de classe: -->

                <img alt="produto" class="mySlides" src="imagens/empresa/brecho.jpg" height="600" width="80%" >
                <img alt="produto" class="mySlides" src="imagens/empresa/brecho1.jpg" height="600" width="80%" >
                <img alt="produto" class="mySlides" src="imagens/empresa/brecho2.jpg" height="600" width="80%" >

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
                <button class="botao_seta"  class="w3-button w3-display-right" onclick="plusDivs(+1)"> <img alt="seta" src="imagens/empresa/direita.png" width="100" height="100"></button>
            </div>

            </div>

        </section>

        </div>


        <div class="localizacao">
            <img alt="localizacao" id="img_localizacao" src="imagens/empresa/brechobernadete.jpg" >
        </div>


    <div class="titulo_parceria">
        Parcerias
    </div>

    <div id="organiza_parcerias">

        <div class="parceria">
        <img alt="parceria" id="img_parceria" src="imagens/empresa/renner.png" width="250px" >
        </div>

        <div class="parceria">
         <img alt="parceria" id="img_parceria" src="imagens/empresa/marisa.png" width="250px" >
        </div>

        <div class="parceria">
         <img alt="parceria" id="img_parceria" src="imagens/empresa/hering.png" width="250px" >
        </div>

        <div class="parceria">
         <img alt="parceria" id="img_parceria" src="imagens/empresa/netshoes.png" width="250px" >
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
