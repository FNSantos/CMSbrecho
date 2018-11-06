<?php

    require_once("ConexaoBanco.php");
    require_once("Filtro.php");

    class FiltroDAO{

        public function inserir(Filtro $filtro){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_filtro(nome, situacao, id_tipo_filtro) VALUES(?, 0, ?)";
            
            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $filtro->getNome());
            
            $stm->bindValue(2, $filtro->getIdTipoFiltro());
            
            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return $SQL;

            } else {

                return $SQL;

            }
            
           

        }

        public function obterUm($id){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_filtro WHERE id_filtro = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $id);
            
            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            $conexao = null;

            return $resultSet;

        }

        public function obterTodos(){

            $listaFiltro = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_filtro";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $filtro = new Filtro();

                $filtro->setId($resultSet["id_filtro"]);
                $filtro->setNome($resultSet["nome"]);
                $filtro->setSituacao($resultSet["situacao"]);

                $listaFiltro[] = $filtro;

            }

            $conexao = null;

            return $listaFiltro;

        }
        
        
        public function obterTipoFiltro(){

            $listaFiltro = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_tipo_filtro";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $tipoFiltro = new Filtro();

                $tipoFiltro->setIdTipoFiltro($resultSet['id_tipo_filtro']);
                $tipoFiltro->setNome($resultSet['nome']);


                $listaFiltro[] = $tipoFiltro;

            }

            $conexao = null;

            return $listaFiltro;

        }
        
        
        

        public function atualizar(Filtro $filtro){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_filtro SET nome = ?, set id_tipo_filtro = ? WHERE id_filtro = ? ";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $filtro->getNome());
            $stm->bindValue(2, $filtro->getIdTipoFiltro());
            $stm->bindValue(3, $filtro->getId());

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

            $SQL = "UPDATE tbl_filtro SET situacao = ? WHERE id_filtro = ?";

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

            $SQL = "DELETE FROM tbl_filtro WHERE id_filtro = ?";

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
