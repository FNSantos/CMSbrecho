<?php

    require_once("ConexaoBanco.php");
    require_once("Nivel.php");

    class NivelDAO{

        public function inserir(Nivel $nivel){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_nivel(nivel, situacao) VALUES(?, 0)";

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

            $SQL = "SELECT * FROM tbl_nivel WHERE id_nivel = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $id);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            $conexao = null;

            return $resultSet;

        }

        public function obterTodos(){

            $listaNiveis = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_nivel";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $nivel = new Nivel();

                $nivel->setId($resultSet["id_nivel"]);
                $nivel->setNome($resultSet["nivel"]);
                $nivel->setSituacao($resultSet["situacao"]);

                $listaNiveis[] = $nivel;

            }

            $conexao = null;

            return $listaNiveis;

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

            $SQL = "UPDATE tbl_nivel SET situacao = ? WHERE id_nivel = ?";

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

            $SQL = "DELETE FROM tbl_nivel WHERE id_nivel = ?";

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
