<?php

    require_once("Model/Estilo.php");
    require_once("Model/EstiloDAO.php");

    session_start();

    class EstiloControl{

        public function inserir(){

            $estilo = new Estilo();
            $estiloDAO = new EstiloDAO();

            $estilo->setNome($_POST["nome"]);

            // echo($_POST["nome"]);

            $estiloDAO->inserir($estilo);

        }

        public function obterTodos(){

            $estiloDAO = new EstiloDAO();

            $listaEstilos = array();

            $listaEstilos = $estiloDAO->obterTodos();

            echo('<tr id="table_title">');
            echo('<td>Nome</td>');
            echo('<td>Opções</td>');
            echo('</tr>');

            foreach ($listaEstilos as $estilo) {

                echo('<tr>');
                echo('<td class="column_content">'.$estilo->getNome().'</td>');
                echo('<td class="column_content">');
                echo('<img src="Imagens/excluir.png" alt="Excluir Funcionário" style="margin:0px;" onclick="remover('.$estilo->getId().')">');
                echo('<img src="Imagens/editar.png" alt="Editar Funcionário" onclick="obterUm('.$estilo->getId().')">');
                echo('<img src="Imagens/'.($estilo->getSituacao() == 0 ? "check_true.png" : "check_false.png").'" alt="Ativar/Desativar Funcionário" onclick="atualizarSituacao('.$estilo->getId().', '.$estilo->getSituacao().')">');
                echo('</td>');
                echo('</tr>');

            }

        }

        public function obterUm(){

            $estiloDAO = new EstiloDAO();

            $_SESSION["id"] = $_POST["id"];

            echo(json_encode($estiloDAO->obterUm($_POST["id"])));

        }

        public function atualizar(){

            $estilo = new Estilo();

            $estiloDAO = new EstiloDAO();

            $estilo->setId($_SESSION["id"]);
            $estilo->setNome($_POST["nome"]);

            $estiloDAO->atualizar($estilo);

        }

        public function remover(){

            $estiloDAO = new EstiloDAO();

            $estiloDAO->remover($_POST["id"]);

        }

        public function atualizarSituacao(){

            $estiloDAO = new EstiloDAO();

            echo($_POST["situacao"]);

            $estiloDAO->atualizarSituacao($_POST["situacao"], $_POST["id"]);

        }

    }

?>
