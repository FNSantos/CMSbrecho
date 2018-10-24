<?php

    require_once("ConexaoBanco.php");
    require_once("Estilo.php");

    class EstiloDAO{

        public function inserir(Estilo $estilo){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_estilo(nome, situacao) VALUES(?, 0)";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $estilo->getNome());

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

            $SQL = "SELECT * FROM tbl_estilo WHERE id_estilo = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $id);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            $conexao = null;

            return $resultSet;

        }

        public function obterTodos(){

            $listaEstilos = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_estilo";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $estilo = new Estilo();

                $estilo->setId($resultSet["id_estilo"]);
                $estilo->setNome($resultSet["nome"]);
                $estilo->setSituacao($resultSet["situacao"]);

                $listaEstilos[] = $estilo;

            }

            $conexao = null;

            return $listaEstilos;

        }

        public function atualizar(Estilo $estilo){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_estilo SET nome = ? WHERE id_estilo = ? ";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $estilo->getNome());
            $stm->bindValue(2, $estilo->getId());

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

            $SQL = "UPDATE tbl_estilo SET situacao = ? WHERE id_estilo = ?";

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

            $SQL = "DELETE FROM tbl_estilo WHERE id_estilo = ?";

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
