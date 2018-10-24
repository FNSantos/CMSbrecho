<?php

    require_once("Model/Cliente.php");
    require_once("Model/ClienteDAO.php");

    session_start();

    class ClienteControl{

        public function inserir(){

            $nivel = new Nivel();
            $nivelxDAO = new NivelDAO();

            $nivel->setNome($_POST["nome"]);

            // echo($_POST["nome"]);

            $nivelDAO->inserir($nivel);

        }

        public function obterTodos(){

            $clienteDAO = new ClienteDAO();

            $listaClientes = array();

            $listaClientes = $clienteDAO->obterTodos();

            echo('<tr id="table_title">');
            echo('<td >Nome</td>');
            echo('<td>CPF</td>');
            echo('<td>Telefone</td>');
            echo('<td>Opções</td>');
            echo('</tr>');

            foreach ($listaClientes as $cliente) {

                echo('<tr>');
                echo('<td class="column_content" style="width:200px;">'.$cliente->getNome().'</td>');
                echo('<td class="column_content">'.$cliente->getCpf().'</td>');
                echo('<td class="column_content">'.$cliente->getCelular().'</td>');
                echo('<td class="column_content">');
                echo('<img src="Imagens/editar.png" alt="Visualizar Funcionário" onclick="obterUm('.$cliente->getId().')">');
                echo('<img src="Imagens/'.($cliente->getSituacao() == 0 ? "check_true.png" : "check_false.png").'" alt="Ativar/Desativar Funcionário" onclick="atualizarSituacao('.$cliente->getId().', '.$cliente->getSituacao().')">');
                echo('</td>');
                echo('</tr>');

            }

        }

        public function obterUm(){

            $clienteDAO = new ClienteDAO();

            $_SESSION["id"] = $_POST["id"];

            echo(json_encode($clienteDAO->obterUm($_POST["id"])));

        }

        public function remover(){

            $nivelDAO = new NivelDAO();

            $nivelDAO->remover($_POST["id"]);

        }

        public function atualizarSituacao(){

            $clienteDAO = new ClienteDAO();

            $clienteDAO->atualizarSituacao($_POST["situacao"], $_POST["id"]);

        }

    }

?>
