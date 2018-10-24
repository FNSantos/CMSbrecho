<?php
    require_once('../Model/ConexaoBanco.php');
    $conexao = ConexaoBanco::obterConexao();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Produtos</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <link type="text/css" rel="stylesheet" href="CSS/style_produtos.css">
        <script src="JavaScript/jquery-3.3.1.js"></script>
        <script src="JavaScript/ajax_produto_crud.js"></script>
        <script src="JavaScript/uploadImagem.js"></script>
    </head>
    <body>
        <?php require_once("cabecalho.php")?>
        <form name="frm_img_produto" method="post" action="adm_produtos.php" enctype="multipart/form-data"></form>
        <div id="main">
            <div id="main_content">
                <?php require_once("menu.php") ?>
                <div id="content_cadastro">
                    <form name="frmprodutos" method="post" action="adm_produtos.php"> 
                    <div id="titulo_cadastro">Cadastro de Produto</div>
                    
                    <div id="campos_NV">
                        <div id="campo_nome">
                            <p class="titulos">Nome:</p> 
                            <input type="text" name="txt_nome" id="txtnome" size="60px;">
                        </div>
                        
                        <div id="campo_valor">
                            <p class="titulos">Valor:</p> 
                            <input type="text" name="txt_valor" id="txtvalor" size="30px;">                  
                        </div>
                    </div>
                    
                    <div id="campo_desc">
                        
                        <p class="titulos" style="margin-top: 0px;">Descrição:</p>
                        <textarea name="txt_desc" id="txtdesc" cols="117" rows="5"></textarea>
                              
                    </div>
                    <div id="caixa_cbox_img">    
                    <div id="c_box">
                        <div>
                        <label class="titulos" style="width:400px; margint-top: -10px; text-align: center; ">Filtros</label>
                        </div>
                        <div id="c_estilo">
                            <label for="combo_estilo" class="titulos">Estilos:</label>
                            <select name="combo_est" id="combo_estilo" onclick="">
                            </select>    
                        </div>

                        <div id="c_categoria">
                            <label for="combo_categoria" class="titulos">categoria:</label>
                            <select name="combo_categoria" id="combo_categoria">
                            </select>    
                        </div>

                        <div id="c_subcategoria">
                            <label for="combo_subcat" class="titulos">Subcategoria:</label>
                            <select name="combo_subcategoria" id="combo_subcat">
                            </select>    
                        </div>
                        
                                    
                        <div id="c_marca">
                            <label for="combo_marca" class="titulos">Marca:</label>
                            <select name="combo_marca" id="combo_marca">
                               
                            </select>
                        </div>

                        <div id="c_tamanho">
                            <label for="combo_tamanho" class="titulos">Tamanho:</label>
                            <select name="combo_tamanho" id="combo_tamanho">>   
                            </select>
                        </div>

                        <div id="c_cor">
                            <label for="combo_cor" class="titulos">Cor:</label>
                            <select name="combo_cor" id="combo_cor">>
                            </select>
                        </div>
                                
                        
                        

                    </div>   


                    <div id="campo_img">
                        <div id="img_produto">

                        </div>

                        <div id="titulo_img">
                        <label>Clique aqui para selecionar uma imagem para este produto:</label>    
                        </div> 

                            <div id="campo_foto">
                            <input name="fle_img" type="file" id="fle_imagem" onchange="uploadImagem()">  
                            <label for="txtimg"></label>
                            <input name="txtimg" type="hidden" id="fl_img" >
                            </div>
                    </div>
                </div>  
                <div id="campo_btn_produtos">
                    <input id="btn_salvar" type="submit" name="btnsave" value="Salvar">   
                </div>  
                 </form>  
  
                
                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
