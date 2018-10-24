<?php

    class Imagem{

        private $id;
        private $nome;
        private $caminho;
        private $idLigacao;

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
         public function setCaminho($caminho){

            $this->caminho = $caminho;

        }

        public function getCaminho(){

            return $this->caminho;

        } 
        public function setIdLigacao($idLigacao){

            $this->idLigacao = $idLigacao;

        }

        public function getIdLigacao(){

            return $this->idLigacao;

        }
        
    ?>