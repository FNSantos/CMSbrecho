<?php

    require_once("ConexaoBanco.php");
    require_once("Cliente.php");

    class ClienteDAO{

        public function inserir(Nivel $nivel){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_cliente(nivel, situacao) VALUES(?, 0)";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $nivel->getNome());

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }

        public function obterUm($id){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_cliente WHERE id_cliente = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $id);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            $conexao = null;

            return $resultSet;

        }

        public function obterTodos(){

            $listaClientes = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_cliente";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $cliente = new Cliente();

                $cliente->setId($resultSet["id_cliente"]);
                $cliente->setNome($resultSet["nome"]);
                $cliente->setCpf($resultSet["cpf"]);
                $cliente->setData_nascimento($resultSet["data_nascimento"]);
                $cliente->setGenero($resultSet["genero"]);
                $cliente->setCelular($resultSet["celular"]);
                $cliente->setSituacao($resultSet["situacao"]);

                $listaClientes[] = $cliente;

            }

            $conexao = null;

            return $listaClientes;

        }

        public function atualizar(Nivel $nivel){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_nivel SET nivel = ? WHERE id_nivel = ? ";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $nivel->getNome());
            $stm->bindValue(2, $nivel->getId());

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }

        public function atualizarSituacao($situacao, $id){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_cliente SET situacao = ? WHERE id_cliente = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $situacao);
            $stm->bindValue(2, $id);

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }

        public function remover($id){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "DELETE FROM tbl_cliente WHERE id_cliente = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $id);

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }

    }

 ?>
