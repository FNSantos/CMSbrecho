<?php

    class Categoria{

        private $id;
        private $nome;
        private $situacao;
        private $idEstilo;

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
        
        
        public function setIdEstilo($idEstilo){

            $this->id_estilo = $idEstilo;

        }

        public function getIdEstilo(){

            return $this->id_estilo;

        }

    }

 ?>
