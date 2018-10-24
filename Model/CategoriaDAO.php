<?php

    require_once("ConexaoBanco.php");
    require_once("Categoria.php");

    class CategoriaDAO{

        public function inserir(Categoria $categoria){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_categoria(nome, situacao, id_estilo) VALUES(?, 0, ? )";
            
            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $categoria->getNome());
            
            $stm->bindValue(2, $categoria->getIdEstilo());
            
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

            $SQL = "SELECT * FROM tbl_categoria WHERE id_categoria = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $id);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            $conexao = null;

            return $resultSet;

        }

        public function obterTodos(){

            $listaCategorias = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_categoria";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $categoria = new Categoria();

                $categoria->setId($resultSet["id_categoria"]);
                $categoria->setNome($resultSet["nome"]);
                $categoria->setSituacao($resultSet["situacao"]);
                $categoria->setIdEstilo($resultSet["id_estilo"]);

                $listaCategorias[] = $categoria;

            }

            $conexao = null;

            return $listaCategorias;

        }
        
        
        public function obterEstilos(){

            $listaEstilos = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_estilo";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $estilo = new Categoria();

                $estilo->setIdEstilo($resultSet['id_estilo']);
                $estilo->setNome($resultSet['nome']);


                $listaEstilos[] = $estilo;

            }

            $conexao = null;

            return $listaEstilos;

        }
        
        
        

        public function atualizar(Categoria $categoria){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_categoria SET nome = ? WHERE id_categoria = ? ";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $categoria->getNome());
            $stm->bindValue(2, $categoria->getId());

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

            $SQL = "UPDATE tbl_categoria SET situacao = ? WHERE id_categoria = ?";

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

            $SQL = "DELETE FROM tbl_categoria WHERE id_categoria = ?";

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
