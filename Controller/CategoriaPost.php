<?php

    require_once("Model/CategoriaPost.php");
    require_once("Model/CategoriaPostDAO.php");

    session_start();

    class CategoriaPostControl{

        public function inserir(){

            $categoriaPost = new CategoriaPost();
            $categoriaPostDAO = new CategoriaPostDAO();

            $categoriaPost->setNome($_POST["nome"]);

            // echo($_POST["nome"]);

            $categoriaPostDAO->inserir($categoriaPost);

        }

        public function obterTodos(){

            $categoriaPostDAO = new CategoriaPostDAO();

            $listaCategoriaPosts = array();

            $listaCategoriaPosts = $categoriaPostDAO->obterTodos();

            echo('<tr id="table_title">');
            echo('<td>Nome</td>');
            echo('<td>Opções</td>');
            echo('</tr>');

            foreach ($listaCategoriaPosts as $categoriaPost) {

                echo('<tr>');
                echo('<td class="column_content">'.$categoriaPost->getNome().'</td>');
                echo('<td class="column_content">');
                echo('<img src="Imagens/excluir.png" alt="Excluir Funcionário" style="margin:0px;" onclick="remover('.$categoriaPost->getId().')">');
                echo('<img src="Imagens/editar.png" alt="Editar Funcionário" onclick="obterUm('.$categoriaPost->getId().')">');
                echo('<img src="Imagens/'.($categoriaPost->getSituacao() == 0 ? "check_true.png" : "check_false.png").'" alt="Ativar/Desativar Funcionário" onclick="atualizarSituacao('.$categoriaPost->getId().', '.$categoriaPost->getSituacao().')">');
                echo('</td>');
                echo('</tr>');

            }

        }

        public function obterUm(){

            $categoriaPostDAO = new CategoriaPostDAO();

            $_SESSION["id"] = $_POST["id"];

            echo(json_encode($categoriaPostDAO->obterUm($_POST["id"])));

        }

        public function atualizar(){

            $categoriaPost = new CategoriaPost();

            $categoriaPostDAO = new CategoriaPostDAO();

            $categoriaPost->setId($_SESSION["id"]);
            $categoriaPost->setNome($_POST["nome"]);

            $categoriaPostDAO->atualizar($categoriaPost);

        }

        public function remover(){

            $categoriaPostDAO = new CategoriaPostDAO();

            $categoriaPostDAO->remover($_POST["id"]);

        }

        public function atualizarSituacao(){

            $categoriaPostDAO = new CategoriaPostDAO();

            echo($_POST["situacao"]);

            $categoriaPostDAO->atualizarSituacao($_POST["situacao"], $_POST["id"]);

        }

    }

?>
