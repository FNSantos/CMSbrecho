<?php

    class BlogPostagem{

        private $id;
        private $titulo;
        private $descricao;
        private $dataPostagem;
        private $caminhoImagem;
        private $idFuncionario;
        private $situacao;
        private $categoria;
        
        
        public function setId($id){

            $this->id = $id;

        }

        public function getId(){

            return $this->id;

        }

        public function setTitulo($titulo){

            $this->titulo =  $titulo;

        }

        public function getTitulo(){

            return $this-> titulo;

        }

        public function setDescricao($descricao){

            $this->descricao = $descricao;

        }

        public function getDescricao(){

            return $this->descricao;

        }
        
        public function setDataPostagem($dataPostagem){

            $this->data = $dataPostagem;

        }
        public function getDataPostagem(){

            return $this->dataPostagem;

        }

        public function setCaminhoImagem($caminhoImagem){

            $this->data = $caminhoImagem;

        }

        public function getCaminhoImagem(){

            return $this->caminhoImagem;

        }
        public function setIdFuncionario($idFuncionario){

            $this->idFuncionario = $idFuncionario;

        }

        public function getIdFuncionario(){

            return $this->idFuncionario;

        }

        public function setSituacao($situacao){

            $this->situacao = $situacao;

        }

        public function getSituacao(){

            return $this->situacao;

        }
        
        public function setCategoria($categoria){

            $this->categoria = $categoria;

        }

        public function getCategoria(){

            return $this->categoria;

        }

    }

 ?>
