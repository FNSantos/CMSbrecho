<?php

    require_once("ConexaoBanco.php");
 
    class Produto{
        private $idProduto;
        private $nome;
        private $propostaPreco;
        private $precoFinal;
        private $descricao;
//        private $id_produto_imagem;
        private $id_tipo_filtro;
        private $idSubcategoria;
        private $idSituacao;
        
        public function getIdProduto(){
            
            return $this->idProduto;
            
        }
        
        public function setIdProduto($idProduto){
            
            $this->idProduto = $idProduto;
            
        }
        
        public function getNome(){
            
            return $this->nome;
            
        }
        
        public function setNome($nome){
        
            $this->nome = $nome;
            
        }
        
        public function getPropostaPreco(){
            
            return $this->propostaPreco;
            
        }
        
        public function setPropostaPreco($propostaPreco){
            
            $this->propostaPreco = $propostaPreco;
            
        }
        
//        public function getPrecoFinal(){
//            
//            return $this->propostaFinal;
//            
//        }
//        
//        public function setPrecoFinal($precoFinal){
//            
//            $this->precoFinal = $precoFinal;
//            
//        }
        
        public function getDescricao(){
            
            return $this->descricao;
            
        }
        
        public function setDescricao($descricao){
            
            $this->descricao = $descricao;
            
        }
        
        public function getId_tipo_filtro(){
            
            return $this->id_tipo_filtro;
            
        }
        
        public function setId_tipo_filtro($id_tipo_filtro){
            
            $this->id_tipo_filtro = $id_tipo_filtro;
            
        }
        
        public function getIdSubcategoria(){
            
            return $this->idSubcategoria;
            
        }
        
        public function setIdSubcategoria($idSubcategoria){
            
            $this->idSubcategoria = $idSubcategoria;
            
        }
        
        public function getIdSituacao(){
            
            return $this->idSituacao;
            
        }
        
        public function setIdSituacao($idSituacao){
            
            $this->idSituacao = $idSituacao;
            
        }
        
//        public function getId_produto_imagem(){
//            
//            return $this->id_produto_imagem;
//            
//        }
//        
//        public function setId_produto_imagem($idSituacao){
//            
//            $this->id_produto_imagem = $id_produto_imagem;
//            
//        }
        
    }

?>