<?php
    require_once("ConexaoBanco.php");
    require_once("Produto.php");
    //require_once("ProdutoImagem.php");

    class ProdutoDAO{
        
        public function inserir(Produto $produto){
           
            $conexao = ConexaoBanco::obterConexao();
            
            $SQL = "INSERT INTO tbl_produto(nome, proposta_preco, descricao, id_subcategoria, id_situacao) VALUES (?, ?, ?, ?, 1)";
            
            $stm = $conexao->prepare($SQL);
            
            $stm->bindValue(1, $produto->getNome());
            $stm->bindValue(2, $produto->getPropostaPreco());
            
//            $stm->bindValue(3, $produto->getPrecoFinal());:
            $stm->bindValue(3, $produto->getDescricao());
            $stm->bindValue(4, $produto->getIdSubcategoria());
            
                    
            $envio = $stm->execute();
            
            $conexao = null;
            
            if($envio){
                
                return True;
                
            }else{
                
                return False;
                
            }
                
        }
        
//        public function inserirImagem($idProduto $imagem){
//            
//            $conexao = ConexaoBanco::obterConexao();
//            
//            $SQL = "INSERT INTO tbl_produto_imagem(id_produto, id_imagem) VALUES (?, ?)";
//            
//            $stm = $conexao->prepare($SQL);
//            
////            $stm = bindValue(1, $$produtoImg->getCaminho_imagem());
//            $stm->bindParam(1, $idProduto);
//            $stm->bindParam(2, $idImagem);
//            
//            $envio = $stm->execute();
//            
//            $conexao = null;
//            
//            if($envio){
//                
//                return True;
//                
//            }else{
//                
//                return False;
//                
//            }
//            
//        }
        
        public function inserirFiltro($idProduto, $idFiltro){
            
            $conexao = ConexaoBanco::obterConexao();
            
            $SQL = "INSERT INTO tbl_produto_filtro(id_produto, id_filtro) VALUES (?, ?)";
            
            $stm = $conexao->prepare($SQL);
            
            $stm->bindParam(1, $idProduto);
            $stm->bindParam(2, $idFiltro);
            
            $envio = $stm->execute();
            
            $conexao = null;
            
            if($envio){
                
                return True;
                
            }else{
                
                return False;
                
            }
        }
        
        public function obterTodos($idProduto){
            
            $conexao = ConexaoBanco::obterConexao();
            
            $listaProdutos = array();
            
            $SQL = "SELECT * FROM tbl_produto AS p 
                    INNER JOIN tbl_subcategoria AS sc ON p.id_subcategoria = sc.id_subcategoria 
                    INNER JOIN tbl_situacao AS s ON p.id_situacao = s.id_situacao;";
            
            $stm = $conexao->prepare($SQL);
            
            $stm->execute();
            
            $stm->setFetchMode(PDO::FETCH_ASSOC);
            
            while($resultSet = $stm->fetch()){
                
                $produto = new Produto();
                
                $produto->setId($resultSet["id_produto"]);
                $produto->setNome($resultSet["nome"]);
                $produto->setPropostaPreco($resultSet["proposta_preco"]);
                $produto->setPrecoFinal($resultSet["preco_final"]);
                $produto->setDescricao($resultSet["descricao"]);
                $produto->setIdSubcategoria($resultSet["id_subcategoria"]);
                $produto->setIdSituacao($resultSet["id_situacao"]);
                
                $listaProdutos[] = $produto;
                
            }
            
            $conexao = null;
            
            return $listaProdutos;
            
        }
        
        public function obterEstilo(){
            
            $conexao = ConexaoBanco::obterConexao();
            
            $listaEstilos = array();
            
            $SQL = "SELECT * FROM tbl_estilo WHERE situacao = 1";
            
            $stm = $conexao->prepare($SQL);
            
            $stm->execute();
            
            $stm->setFetchMode(PDO::FETCH_ASSOC);
            
            while($resultSet = $stm->fetch()){
                
                $produto = new Produto();
                
                $produto->setIdProduto($resultSet["id_estilo"]);
                $produto->setNome($resultSet["nome"]);
                
                
                $listaEstilos[] = $produto;
                
            }
            
            $conexao = null;
            
            return $listaEstilos;
            
        }
        
        public function obterSubcategoria(){
            
            $conexao = ConexaoBanco::obterConexao();
            
            $listaSubcategoria = array();
            
            $SQL = "SELECT * FROM tbl_subcategoria WHERE situacao = 1";
            
            $stm = $conexao->prepare($SQL);
            
            $stm->execute();
            
            $stm->setFetchMode(PDO::FETCH_ASSOC);
            
            while($resultSet = $stm->fetch()){
                
                $produto = new Produto();
                
                $produto->setIdProduto($resultSet["id_subcategoria"]);
                $produto->setNome($resultSet["nome"]);
                
                
                $listaSubcategoria[] = $produto;
                
            }
            
            $conexao = null;
            
            return $listaSubcategoria;
            
        }
        
        public function obterCategoria(){
            
            $conexao = ConexaoBanco::obterConexao();
            
            $listaCategoria = array();
            
            $SQL = "SELECT * FROM tbl_categoria WHERE situacao = 1";
            
            $stm = $conexao->prepare($SQL);
            
            $stm->execute();
            
            $stm->setFetchMode(PDO::FETCH_ASSOC);
            
            while($resultSet = $stm->fetch()){
                
                $produto = new Produto();
                
                $produto->setIdProduto($resultSet["id_categoria"]);
                $produto->setNome($resultSet["nome"]);
                
                
                $listaCategoria[] = $produto;
                
            }
            
            $conexao = null;
            
            return $listaCategoria;
               
            
        }
        
        public function obterFiltro($id_tipo_filtro){
            
          $conexao = ConexaoBanco::obterConexao();
            
            $listaFiltro = array();
            
            $SQL = "SELECT * FROM tbl_filtro WHERE situacao = 1 and id_tipo_filtro = ?";
            
            $stm = $conexao->prepare($SQL);
            
            $stm->bindParam(1, $id_tipo_filtro);
           
            $stm->execute();
            
            $stm->setFetchMode(PDO::FETCH_ASSOC);
            
            while($resultSet = $stm->fetch()){
                
                $produto = new Produto();
                
                $produto->setIdProduto($resultSet["id_filtro"]);
                $produto->setNome($resultSet["nome"]);
                $produto->setId_tipo_filtro($resultSet["id_tipo_filtro"]);
                
                
                $listaFiltro[] = $produto;
                
            }
            
            $conexao = null;
            
            return $listaFiltro;
              
            
        }
        
        public function obterUm($idProduto){
            
            $conexao = ConexaoBanco::obterConexao();
            
            $SQL = "SELECT * FROM tbl_produto AS p
                INNER JOIN tbl_subcategoria AS sc ON p.id_subcategoria = sc.id_subcategoria 
                INNER JOIN tbl_situacao AS s ON p.id_situacao = s.id_situacao WHERE id_produto = ?";
            
            $stm = $conexao->prepare($SQL);
            
            $stm->bindParam(1, $idProduto);
            
            $stm->execute;
            
            $stm->setFetchMode(PDO::FETCH_ASSOC);
            
            $resultSet = $stm->fetch();
            
            $conexao = null;
            
            return $resultSet;
            
        }
        
        public function atualizar(Produto $produto){
            
            $conexao = ConexaoBanco::obterConexao();
            
            $SQL = "UPDATE tbl_produto SET nome= ?, proposta_preco = ?, preco_final = ?, descricao = ?, id_subcategoria = ?, id_situacao = ? WHERE id_produto = ?";
            
            $stm = $conexao->prepare($SQL);
            
            $stm->bindValue(1, $produto->getNome());
            $stm->bindValue(2, $produto->getProposta_preco());
            $stm->bindValue(3, $produto->getPreco_final());
            $stm->bindValue(4, $produto->getDescricao());
            $stm->bindValue(5, $produto->getId_subcategoria());
            $stm->bindValue(6, $produto->getId_situacao());
            $stm->bindValue(7, $produto->getId());
            
            $envio = $stm->execute();
            
            $conexao = null;
            
            if($envio){
                
                return true;
                
            }else{
                
                return false;
                
            }            
            
        }
        
        public function remover($idProduto){
            
            $conexao = ConexaoBanco::obterConexao();
            
            $SQL = "DELETE FROM tbl_produto WHERE id_produto = ?";
            
            $stm = $conexao->prepare();
            
            $envio = $stm->execute();
            
            $conexao = null;
            
            if($envio){
                
                return true;
                
            }else{
                
                return false;
                
            } 
            
        }
        
    }
    
?>