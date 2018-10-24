<?php

    require_once("ConexaoBanco.php");
    require_once("CategoriaPost.php");

    class CategoriaPostDAO{

        public function inserir(CategoriaPost $categoriaPost){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_tipo_postagem(situacao, nome) VALUES(0, ?)";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $categoriaPost->getNome());

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

            $SQL = "SELECT * FROM tbl_tipo_postagem WHERE id_tipo_postagem = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $id);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            $conexao = null;

            return $resultSet;

        }

        public function obterTodos(){

            $listaCategoriaPosts = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_tipo_postagem";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $categoriaPost = new CategoriaPost();

                $categoriaPost->setId($resultSet["id_tipo_postagem"]);
                $categoriaPost->setSituacao($resultSet["situacao"]);
                $categoriaPost->setNome($resultSet["nome"]);

                $listaCategoriaPosts[] = $categoriaPost;

            }

            $conexao = null;

            return $listaCategoriaPosts;

        }

        public function atualizar(CategoriaPost $categoriaPost){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_tipo_postagem SET nome = ? WHERE id_tipo_postagem = ? ";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $categoriaPost->getNome());
            $stm->bindValue(2, $categoriaPost->getId());

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

            $SQL = "UPDATE tbl_tipo_postagem SET situacao = ? WHERE id_tipo_postagem = ?";

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

            $SQL = "DELETE FROM tbl_tipo_postagem WHERE id_tipo_postagem = ?";

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
