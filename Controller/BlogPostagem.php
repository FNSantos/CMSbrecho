<?php

    require_once("Model/BlogPostagem.php");
    require_once("Model/BlogPostagemDAO.php");

    session_start();

    class BlogPostagemControl{

        public function inserir(){

            $blogPostagem = new BlogPostagem();
            $blogPostagemDAO = new BlogPostagemDAO();
            
            $blogPostagem->setTitulo($_POST["titulo"]);
            $blogPostagem->setDescricao($_POST["descricao"]);
            //$blogPostagem->setCaminhoImagem($_POST["caminhoImagem"]);         
            $blogPostagem->setCategoria($_POST["categoria"]);
            $blogPostagem->setIdFuncionario($_SESSION['idFuncionario']);
            
            $blogPostagemDAO->inserir($blogPostagem);

        }

        public function obterTodos(){

            $blogPostagemDAO = new BlogPostagemDAO();

            $listaPostsBlog = array();

            $listaPostsBlog = $blogPostagemDAO->obterTodos();
            
            foreach ($listaPostsBlog as $PostsBlog) {

                echo('<div class="line_input" style="height:500px;">
                        <div class="content_input" id="txt_titulo" style="height:50px; font-size:30px; width:90%;">
                           '.$PostsBlog->getTitulo().'
                        </div>
                        <div class="content_visualizar" style="">
                            <div class="itens_visualizacao">
                                <div class="icons">
                                   <img height="50px" src="Imagens/excluir.png" alt="Excluir" style="margin:0px;" onclick="remover('.$PostsBlog->getId().')">
                                </div>
                                <a href="cadastro_postagem_blog.php?id='.$PostsBlog->getId().'">
                                <div class="icons">
                                    <img height="50px" src="Imagens/editar.png" alt="Editar Funcionário">
                                </div>
                                </a>
                                <div class="icons">
                                   <img height="50px" src="Imagens/'.($PostsBlog->getSituacao() == 0 ? "check_true.png" : "check_false.png").'" alt="Ativar/Desativar Funcionário" onclick="atualizarSituacao('.$PostsBlog->getId().', '.$PostsBlog->getSituacao().')">
                                </div>
                            </div>
                        </div>
                        
                    </div>');
               
            }

        }
        
        public function obterCategorias(){

            $blogPostagemDAO = new BlogPostagemDAO();

            $listaCategoriaPosts = array();

            $listaCategoriaPosts = $blogPostagemDAO->obterCategorias();

            echo("<select id='slt_nivel' class='input_select'>");
            foreach ($listaCategoriaPosts as $categoriaPost) {
                

                echo('<option value='.$categoriaPost->getId().'>'.$categoriaPost->getCategoria().'</option>');
               
            }
            echo("</select>");

        }

        public function obterUm(){

            $blogPostagemDAO = new BlogPostagemDAO();

            $_SESSION["idPostBlog"] = $_POST["idPostBlog"];

            echo(json_encode($blogPostagemDAO->obterUm($_POST["idPostBlog"])));

        }

        public function atualizar(){

            $blogPostagem = new BlogPostagem();
            
            $blogPostagemDAO = new BlogPostagemDAO();
            
            $blogPostagem->setId($_SESSION["idPostBlog"]);
            $blogPostagem->setTitulo($_POST["titulo"]);
            $blogPostagem->setDescricao($_POST["descricao"]);
            $blogPostagem->setCategoria($_POST["categoria"]);

            $blogPostagemDAO->atualizar($blogPostagem);

        }

        public function remover(){

            $blogPostagemDAO = new BlogPostagemDAO();

            $blogPostagemDAO->remover($_POST["idPostBlog"]);

        }

        public function atualizarSituacao(){

            $blogPostagemDAO = new BlogPostagemDAO();

            echo($_POST["situacao"]);

            $blogPostagemDAO->atualizarSituacao($_POST["id"],$_POST["situacao"]);

        }

    }

?>
