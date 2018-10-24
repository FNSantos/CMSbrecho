<?php

    require_once("Model/Nivel.php");
    require_once("Model/NivelDAO.php");

    session_start();

    class NivelControl{

        public function inserir(){

            $nivel = new Nivel();
            $nivelDAO = new NivelDAO();

            $nivel->setNome($_POST["nome"]);

            // echo($_POST["nome"]);

            $nivelDAO->inserir($nivel);

        }

        public function obterTodos(){

            $nivelDAO = new NivelDAO();

            $listaNiveis = array();

            $listaNiveis = $nivelDAO->obterTodos();

            echo('<tr id="table_title">');
            echo('<td>Nome</td>');
            echo('<td>Opções</td>');
            echo('</tr>');

            foreach ($listaNiveis as $nivel) {

                echo('<tr>');
                echo('<td class="column_content">'.$nivel->getNome().'</td>');
                echo('<td class="column_content">');
                echo('<img src="Imagens/excluir.png" alt="Excluir Funcionário" style="margin:0px;" onclick="remover('.$nivel->getId().')">');
                echo('<img src="Imagens/editar.png" alt="Editar Funcionário" onclick="obterUm('.$nivel->getId().')">');
                echo('<img src="Imagens/'.($nivel->getSituacao() == 0 ? "check_true.png" : "check_false.png").'" alt="Ativar/Desativar Funcionário" onclick="atualizarSituacao('.$nivel->getId().', '.$nivel->getSituacao().')">');
                echo('</td>');
                echo('</tr>');

            }

        }

        public function obterUm(){

            $nivelDAO = new NivelDAO();

            $_SESSION["id"] = $_POST["id"];

            echo(json_encode($nivelDAO->obterUm($_POST["id"])));

        }

        public function atualizar(){

            $nivel = new Nivel();

            $nivelDAO = new NivelDAO();

            $nivel->setId($_SESSION["id"]);
            $nivel->setNome($_POST["nome"]);

            $nivelDAO->atualizar($nivel);

        }

        public function remover(){

            $nivelDAO = new NivelDAO();

            $nivelDAO->remover($_POST["id"]);

        }

        public function atualizarSituacao(){

            $nivelDAO = new NivelDAO();

            echo($_POST["situacao"]);

            $nivelDAO->atualizarSituacao($_POST["situacao"], $_POST["id"]);

        }

    }

?>
