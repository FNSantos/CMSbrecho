<!DOCTYPE html>
<html>
<head>
	<title>Brechó Bernadete</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
	<script src="js/jquery.js" charset="utf-8"></script>
	<!-- <script src="js/menu_scroll.js" charset="utf-8"></script> -->
	<script src="js/slide_script.js" charset="utf-8"></script>
</head>
<body>
	<?php include("header.php"); ?>
	<div id="main">
		<section id = "slider">
			<div class = "nav_slider" style="margin-left:0px;padding-bottom:20px;" onclick="slideAnterior(1)">
				&#10094;
			</div>
			<div class = "nav_slider" id="nav_left" style="padding-bottom:20px;" onclick="proximoSlide(1)">
				&#10095;
			</div>
			<div id="img_1" class="img_slider">
				<img src="imagens/imagens_home/slider_1.jpg" alt="Imagem exemplo 1">
			</div>
			<div id="img_2" class="img_slider" style="display:none;">
				<img src="imagens/imagens_home/slider_2.jpg" alt="Imagem exemplo 2">
			</div>
			<div id="img_3" class="img_slider" style="display:none;">
				<img src="imagens/imagens_home/slider_3.jpg" alt="Imagem exemplo 3">
			</div>
			<div id="slider_dots">
				<div class="dot active" onclick="escolherSlide(1)">
				</div>
				<div class="dot" onclick="escolherSlide(2)">
				</div>
				<div class="dot" onclick="escolherSlide(3)">
				</div>
			</div>
		</section>
	    <section class="content">
			<div class="content_text">
				<span style="color:#FFFFFF;">
					Negócio
				</span>
				<p>
					As constantes mudanças do mundo da moda e o resgate de tendências são alguns dos motivos que fazem do brechó um empreendimento atrativo para lojistas e consumidores. A ideia é oferecer peças retro e vintage, peças que não se encontram em qualquer lugar e também com um preço justo.
				</p>
			</div>
	    </section>
	    <section id="recently_inserted">
			<div class="titulos_home">
				Recentemente Adicionados
			</div>
	        <div id="recentadd">
	            <div id="adicionados">
	                <div class="itens_add">
	                    <img src="imagens/imagens_home/roupa_1.jpg">
	                    <div class="itens_add_camada">
							<p>BODY FLORAL COM ALÇAS FRANZIDAS</p>
	                        <p>R$ 59,90</p>
	                    </div>
	                </div>
	                <div class="itens_add">
		                <img src="imagens/imagens_home/roupa_2.jpg">
		                <div class="itens_add_camada">
							<p>BODY FLORAL COM ALÇAS FRANZIDAS</p>
							<p>R$ 59,90</p>
		                </div>
	                </div>
	                <div class="itens_add">
		                <img src="imagens/imagens_home/roupa_3.jpg">
	                    <div class="itens_add_camada">
							<p>BODY FLORAL COM ALÇAS FRANZIDAS</p>
	                        <p>R$ 59,90</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <section id="content_tendencia">
			<div class="titulos_home">
				Tendência
			</div>
	        <div id="tendencia">
	            <div id="tendencias">
	                <div class="itens_tendencias">
	                    <img src="imagens/imagens_home/tendencia_1.jpg" style="width: 100%; height: 100%;">
						<div class="tendencia_texto">
							Ak Casual
						</div>
	                </div>
	                <div class="itens_tendencias">
	                    <img src="imagens/imagens_home/tendencia_2.jpg" style="width: 100%; height: 100%;">
						<div class="tendencia_texto">
							Pool Street
						</div>
	                </div>
	                <div class="itens_tendencias">
	                    <img src="imagens/imagens_home/tendencia_3.jpg" style="width: 100%; height: 100%;">
						<div class="tendencia_texto">
							Ak Urban
						</div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <section id="content_ofertas">
	        <div id="ofertas">
	            <div class="titulos_home">
	                Ofertas
	            </div>
	        <div id="oferta">
	            <div id="img_destaque">
		            <img src="imagens/imagens_home/oferta__1.jpg" style="width: 100%; height: 100%;">
					<div class="text_offer">Vestidos com 50% de Desconto</div>
				</div>
	            <div id="oferta_slide">
					<div class="itens_add" id="first_product">
		                <img src="imagens/imagens_home/roupa_2.jpg">
		                <div class="itens_add_camada">
							<p>BODY FLORAL COM ALÇAS FRANZIDAS</p>
							<p>R$ 59,90</p>
		                </div>
	                </div>
	                <div class="itens_add">
		                <img src="imagens/imagens_home/roupa_3.jpg">
	                    <div class="itens_add_camada">
							<p>BODY FLORAL COM ALÇAS FRANZIDAS</p>
	                        <p>R$ 59,90</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	</div>
	<footer>
	    <?php include("footer.php");?>
	</footer>
</body>
</html>
