<?php

    class Cliente{

        private $id;
        private $nome;
        private $senha;
        private $cpf;
        private $data_nascimento;
        private $genero;
        private $celular;
        private $email;
        private $situacao;
        private $id_endereco;

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
        
        public function setCpf($cpf){

            $this->cpf = $cpf;

        }

        public function getCpf(){

            return $this->cpf;

        }
        public function setData_nascimento($data_nascimento){

            $this->data_nascimento = $data_nascimento;

        }

        public function getData_nascimento(){

            return $this->data_nascimento;

        }
        
        public function setGenero($genero){

            $this->genero = $genero;

        }

        public function getGenero(){

            return $this->genero;

        }
        public function setCelular($celular){

            $this->celular = $celular;

        }

        public function getCelular(){

            return $this->celular;

        }
        public function setEmail($email){

            $this->email = $email;

        }

        public function getEmail(){

            return $this->email;

        }
        public function setSituacao($situacao){

            $this->situacao = $situacao;

        }

        public function getSituacao(){

            return $this->situacao;

        }
        public function setId_endereco($id_endereco){

            $this->id_endereco = $id_endereco;

        }

        public function getId_endereco(){

            return $this->id_endereco;

        }       

    }

 ?>
