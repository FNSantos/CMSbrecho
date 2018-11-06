<?php

    require_once("Model/Filtro.php");
    require_once("Model/FiltroDAO.php");


    session_start();

    class FiltroControl{

        public function inserir(){

            $filtro = new Filtro();
            $filtroDAO = new FiltroDAO();

            $filtro->setNome($_POST["nome"]);
            $filtro->setIdTipoFiltro($_POST["id_tipo_filtro"]);

            // echo($_POST["nome"]);

            $filtroDAO->inserir($filtro);

        }

        public function obterTodos(){

            $filtroDAO = new FiltroDAO();

            $listaFiltro = array();

            $listaFiltro = $filtroDAO->obterTodos();

            echo('<tr id="table_title">');
            echo('<td>Nome</td>');
            echo('<td>Opções</td>');
            echo('</tr>');

            foreach ($listaFiltro as $filtro) {

                echo('<tr>');
                echo('<td class="column_content">'.$filtro->getNome().'</td>');
                echo('<td class="column_content">');
                echo('<img src="Imagens/excluir.png" alt="Excluir" style="margin:0px;" onclick="remover('.$filtro->getId().')">');
                echo('<img src="Imagens/editar.png" alt="Editar Funcionário" onclick="obterUm('.$filtro->getId().')">');
                echo('<img src="Imagens/'.($filtro->getSituacao() == 0 ? "check_true.png" : "check_false.png").'" alt="Ativar/Desativar Funcionário" onclick="atualizarSituacao('.$filtro->getId().', '.$filtro->getSituacao().')">');
                echo('</td>');
                echo('</tr>');

            }

        }
        
        
        public function obterTipoFiltro(){

            $filtroDAO = new FiltroDAO();

            $listaFiltro = array();

            $listaFiltro = $filtroDAO->obterTipoFiltro();
                                    
            echo('<select class="select_tipo_filtro" id="slt_tipo_filtro">');
            echo('<option value=""> -SELECIONE-</option>');
            foreach ($listaFiltro as $row) {
                
                echo('<option value="'.$row->getIdTipoFiltro().'">'.$row->getNome().'</option>');
             
            }
            echo('</select>');
        }
        
        

        public function obterUm(){

            $filtroDAO = new FiltroDAO();

            $_SESSION["id"] = $_POST["id"];

            echo(json_encode($filtroDAO->obterUm($_POST["id"])));

        }

        public function atualizar(){

            $filtro = new Filtro();

            $filtroDAO = new FiltroDAO();

            $filtro->setId($_SESSION["id"]);
            $filtro->setNome($_POST["nome"]);
            $filtro->setIdTipoFiltro($_POST["id_tipo_filtro"]);

             $filtroDAO->atualizar($filtro);

        }

        public function remover(){

            $filtroDAO = new FiltroDAO();

            $filtroDAO->remover($_POST["id"]);

        }

        public function atualizarSituacao(){

            $filtroDAO = new FiltroDAO();

            echo($_POST["situacao"]);

            $filtroDAO->atualizarSituacao($_POST["situacao"], $_POST["id"]);

        }

    }

?>
