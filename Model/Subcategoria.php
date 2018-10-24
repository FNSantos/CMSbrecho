<?php

    class Subcategoria{

        private $id;
        private $nome;
        private $situacao;
        private $idCategoria;

        public function setId($id){

            $this->id = $id;

        }

        public function getId(){

            return $this->id;

        }

        public function setNome($nome){

            $this->nome = $nome;

        }

        public function getNome(){

            return $this->nome;

        }

        public function setSituacao($situacao){

            $this->situacao = $situacao;

        }

        public function getSituacao(){

            return $this->situacao;

        }
        
        
        public function setIdCategoria($idCategoria){

            $this->id_categoria = $idCategoria;

        }

        public function getIdCategoria(){

            return $this->id_categoria;

        }

    }

 ?>
