<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Cadastro de Funcionário</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <link type="text/css" rel="stylesheet" href="CSS/style_cadastro_postagem_blog.css">
        <script src="JavaScript/jquery-3.3.1.js" charset="utf-8"></script>
        <script src="JavaScript/ajax_blog_postagem_crud.js" charset="utf-8"></script>
        <script>
            $(document).ready(function(){
                var id = "<?php echo $_GET['id'];?>";
                
                if(id == null){

                }else{
                    obterUm();
                }
                
                
            });
        </script>
    </head>
    <body>
        <input id="id_post" type="hidden" value="<?php echo $_GET['id'];?>">
        <?php require_once("cabecalho.php")?>
        <div id="main" style="height:2000px;">
            <div id="main_content">
                <?php require_once("menu.php") ?>
                <div id="content">
                    <div class="title_content" style="float:none;">
                        Postagem Blog
                    </div>
                    <div class="line_input">
                        <div class="content_input">
                            <div class="title_input">
                                Titulo
                            </div>
                            <input type="text" name="txt_titulo" id="txt_titulo" placeholder="Digite o nome do funcionário." class="input_text">
                        </div>
                        
                    </div>
                    
                    <div class="line_input" style="height:350px;">
                        <div class="content_input" style="height:350px;" >
                            <div class="title_input" >
                                Descrição
                            </div>
                            <textarea name="slt_estado" id="txt_descricao" class="input_textarea" ></textarea>

                        </div>
                    </div>
                    <div class="line_input" style="width:500px;">
                        <div class="content_input" >
                            <div class="title_input">
                                Categoria
                            </div>
                            <div name="slt_nivel" id="slt_nivel" class="input_select">
                                
                            </div>
                        </div>
                           
                    </div>
                    <div class="line_input" style="height:500px;" >
                        <div class="content_input" style="height:350px;" >
                            <div class="title_input" >
                                Imagem Principal
                            </div>
                            <div name="slt_estado" id="slt_estado" class="input_textarea" >
                                <div id="box_image">
                                </div>
                                <input type="file" id="txt_imagem">
                            </div>

                        </div>
                    </div>
                    <div class="line_input">
                        <div class="content_input" style="height:350px;" >
                            <div class="title_input" >
                                Texto
                            </div>
                            <textarea name="slt_estado" id="txt_texto" class="input_textarea" ></textarea>

                        </div>
                    </div>
                    <div class="line_input">
                        <button name="btn_salvar" id="btn_salvar" class="buttons" style="margin-left:830px;">Salvar</button>
                        <a href="adm_postagem_blog.php">
                            <button name="btn_cancelar" class="buttons">Cancelar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
