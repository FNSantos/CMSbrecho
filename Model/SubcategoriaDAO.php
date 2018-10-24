<?php

    require_once("ConexaoBanco.php");
    require_once("Subcategoria.php");

    class SubcategoriaDAO{

        public function inserir(Subcategoria $subcategoria){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_subcategoria(nome, situacao, id_categoria) VALUES(?, 0, ? )";
            
            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $subcategoria->getNome());
            
            $stm->bindValue(2, $subcategoria->getIdCategoria());
            
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

            $SQL = "SELECT * FROM tbl_subcategoria WHERE id_subcategoria = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $id);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            $conexao = null;

            return $resultSet;

        }

        public function obterTodos(){

            $listaSubcategorias = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_subcategoria";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $subcategoria = new Subcategoria();

                $subcategoria->setId($resultSet["id_subcategoria"]);
                $subcategoria->setNome($resultSet["nome"]);
                $subcategoria->setSituacao($resultSet["situacao"]);
                $subcategoria->setIdCategoria($resultSet["id_categoria"]);

                $listaSubcategorias[] = $subcategoria;

            }

            $conexao = null;

            return $listaSubcategorias;

        }
        
        
        public function obterCategorias(){

            $listaCategorias = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_categoria";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $categoria= new Subcategoria();

                $categoria->setIdCategoria($resultSet['id_categoria']);
                $categoria->setNome($resultSet['nome']);


                $listaCategorias[] = $categoria;

            }

            $conexao = null;

            return $listaCategorias;

        }
        
        
        

        public function atualizar(Subcategoria $subcategoria){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_subcategoria SET nome = ? WHERE id_subcategoria = ? ";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $subcategoria->getNome());
            $stm->bindValue(2, $subcategoria->getId());

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

            $SQL = "UPDATE tbl_subcategoria SET situacao = ? WHERE id_subcategoria = ?";

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

            $SQL = "DELETE FROM tbl_subcategoria WHERE id_subcategoria = ?";

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
