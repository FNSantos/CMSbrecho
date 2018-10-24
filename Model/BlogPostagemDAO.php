<?php

    require_once("ConexaoBanco.php");
    require_once("BlogPostagem.php");

    class BlogPostagemDAO{

        public function inserir(BlogPostagem $blogPostagem){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_postagem(titulo, descricao, data_postagem, caminho_imagem, situacao, id_funcionario, id_tipo_postagem) VALUES(?, ?, ?, ?, 0, ?, ?)";
            
            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $blogPostagem->getTitulo());
            $stm->bindValue(2, $blogPostagem->getDescricao());
            $stm->bindValue(3, date("Y-m-d"));
            $stm->bindValue(4, $blogPostagem->getCaminhoImagem());
            $stm->bindValue(5, $blogPostagem->getIdFuncionario());
            $stm->bindValue(6, $blogPostagem->getCategoria());
           
            $envio = $stm->execute();

            if($envio){

                $SQL = "SELECT LAST_INSERT_ID()";

                $stm = $conexao->prepare($SQL);

                $stm->setFetchMode(PDO::FETCH_ASSOC);

                $stm->execute();

                $resultSet = $stm->fetch();

                $conexao = null;

                return $resultSet["LAST_INSERT_ID()"];

            }

        }

        public function obterUm($id){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_postagem WHERE id_postagem = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $id);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            $conexao = null;

            return $resultSet;

        }

        public function obterTodos(){

            $listaPotsblog = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_postagem";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $blogPostagem = new BlogPostagem();

                $blogPostagem->setId($resultSet["id_postagem"]);
                $blogPostagem->setTitulo($resultSet["titulo"]);
                $blogPostagem->setCaminhoImagem($resultSet["caminho_imagem"]);
                $blogPostagem->setSituacao($resultSet["situacao"]);

                $listaPotsblog[] = $blogPostagem;
            }

            $conexao = null;

            return $listaPotsblog;

        }
        
        public function obterCategorias(){

            $listaCategoria = array();

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_tipo_postagem";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

             while($resultSet = $stm->fetch()){

                $categoriaPost = new BlogPostagem();

                $categoriaPost->setId($resultSet["id_tipo_postagem"]);
                $categoriaPost->setCategoria($resultSet["nome"]);

                $listaCategoriaPosts[] = $categoriaPost;

            }
            $conexao = null;

            return $listaCategoriaPosts;

        }

        public function atualizar(BlogPostagem $blogPostagem){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = " UPDATE tbl_postagem SET titulo = ?, descricao = ? , id_tipo_postagem = ? WHERE id_postagem = ? ";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $blogPostagem->getTitulo());
            $stm->bindValue(2, $blogPostagem->getDescricao());
            $stm->bindValue(3, $blogPostagem->getCategoria());
            $stm->bindValue(4, $blogPostagem->getId());

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }

        public function atualizarSituacao($id, $situacao){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_postagem SET situacao = ? WHERE id_postagem = ?";
            
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

            $SQL = "DELETE FROM tbl_postagem WHERE id_postagem = ?";
            
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
