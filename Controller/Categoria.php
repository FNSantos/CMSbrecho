<?php

    require_once("Model/Categoria.php");
    require_once("Model/CategoriaDAO.php");


    session_start();

    class CategoriaControl{

        public function inserir(){

            $categoria = new Categoria();
            $categoriaDAO = new CategoriaDAO();

            $categoria->setNome($_POST["nome"]);
            $categoria->setIdEstilo($_POST["id_estilo"]);

            // echo($_POST["nome"]);

            $categoriaDAO->inserir($categoria);

        }

        public function obterTodos(){

            $categoriaDAO = new CategoriaDAO();

            $listaCategorias = array();

            $listaCategorias = $categoriaDAO->obterTodos();

            echo('<tr id="table_title">');
            echo('<td>Nome</td>');
            echo('<td>Opções</td>');
            echo('</tr>');

            foreach ($listaCategorias as $categoria) {

                echo('<tr>');
                echo('<td class="column_content">'.$categoria->getNome().'</td>');
                echo('<td class="column_content">');
                echo('<img src="Imagens/excluir.png" alt="Excluir" style="margin:0px;" onclick="remover('.$categoria->getId().')">');
                echo('<img src="Imagens/editar.png" alt="Editar Funcionário" onclick="obterUm('.$categoria->getId().')">');
                echo('<img src="Imagens/'.($categoria->getSituacao() == 0 ? "check_true.png" : "check_false.png").'" alt="Ativar/Desativar Funcionário" onclick="atualizarSituacao('.$categoria->getId().', '.$categoria->getSituacao().')">');
                echo('</td>');
                echo('</tr>');

            }

        }
        
        
        public function obterEstilos(){

            $categoriaDAO = new CategoriaDAO();

            $listaEstilos = array();

            $listaEstilos = $categoriaDAO->obterEstilos();
                                    
            echo('<select class="select_categoria" id="slt_estilo">');
            echo('<option value=""> -SELECIONE-</option>');
            foreach ($listaEstilos as $row) {
                
                echo('<option value="'.$row->getIdEstilo().'">'.$row->getNome().'</option>');
             
            }
            echo('</select>');
        }
        
        

        public function obterUm(){

            $categoriaDAO = new CategoriaDAO();

            $_SESSION["id"] = $_POST["id"];

            echo(json_encode($categoriaDAO->obterUm($_POST["id"])));

        }

        public function atualizar(){

            $categoria = new Categoria();

            $categoriaDAO = new CategoriaDAO();

            $categoria->setId($_SESSION["id"]);
            $categoria->setNome($_POST["nome"]);

             $categoriaDAO->atualizar( $categoria);

        }

        public function remover(){

            $categoriaDAO = new CategoriaDAO();

            $categoriaDAO->remover($_POST["id"]);

        }

        public function atualizarSituacao(){

            $categoriaDAO = new CategoriaDAO();

            echo($_POST["situacao"]);

            $categoriaDAO->atualizarSituacao($_POST["situacao"], $_POST["id"]);

        }

    }

?>
