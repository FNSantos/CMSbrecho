<?php

    require_once("Model/Subcategoria.php");
    require_once("Model/SubcategoriaDAO.php");


    session_start();

    class SubcategoriaControl{

        public function inserir(){

            $subcategoria = new Subcategoria();
            $subcategoriaDAO = new SubcategoriaDAO();

            $subcategoria->setNome($_POST["nome"]);
            $subcategoria->setIdCategoria($_POST["id_categoria"]);

            // echo($_POST["nome"]);

            $subcategoriaDAO->inserir($subcategoria);

        }

        public function obterTodos(){

            $subcategoriaDAO = new SubcategoriaDAO();

            $listaSubcategorias = array();

            $listaSubcategorias = $subcategoriaDAO->obterTodos();

            echo('<tr id="table_title">');
            echo('<td>Nome</td>');
            echo('<td>Opções</td>');
            echo('</tr>');

            foreach ($listaSubcategorias as $subcategoria) {

                echo('<tr>');
                echo('<td class="column_content">'.$subcategoria->getNome().'</td>');
                echo('<td class="column_content">');
                echo('<img src="Imagens/excluir.png" alt="Excluir" style="margin:0px;" onclick="remover('.$subcategoria->getId().')">');
                echo('<img src="Imagens/editar.png" alt="Editar" onclick="obterUm('.$subcategoria->getId().')">');
                echo('<img src="Imagens/'.($subcategoria->getSituacao() == 0 ? "check_true.png" : "check_false.png").'" alt="Ativar/Desativar Funcionário" onclick="atualizarSituacao('.$subcategoria->getId().', '.$subcategoria->getSituacao().')">');
                echo('</td>');
                echo('</tr>');

            }

        }
        
        
        public function obterCategorias(){

            $subcategoriaDAO = new SubcategoriaDAO();

            $listaCategorias = array();

            $listaCategorias = $subcategoriaDAO->obterCategorias();
                                    
            echo('<select class="select_subcategoria" id="slt_categoria">');
            echo('<option value=""> -SELECIONE-</option>');
            foreach ($listaCategorias as $row) {
                
                echo('<option value="'.$row->getIdCategoria().'">'.$row->getNome().'</option>');
             
            }
            echo('</select>');
        }
        
        

        public function obterUm(){

            $subcategoriaDAO = new SubcategoriaDAO();

            $_SESSION["id"] = $_POST["id"];

            echo(json_encode($subcategoriaDAO->obterUm($_POST["id"])));

        }

        public function atualizar(){

            $subcategoria = new Subcategoria();

            $subcategoriaDAO = new SubcategoriaDAO();

            $subcategoria->setId($_SESSION["id"]);
            $subcategoria->setNome($_POST["nome"]);

            $subcategoriaDAO->atualizar( $subcategoria);

        }

        public function remover(){

            $subcategoriaDAO = new SubcategoriaDAO();

            $subcategoriaDAO->remover($_POST["id"]);

        }

        public function atualizarSituacao(){

            $subcategoriaDAO = new SubcategoriaDAO();

            echo($_POST["situacao"]);

            $subcategoriaDAO->atualizarSituacao($_POST["situacao"], $_POST["id"]);

        }

    }

?>
