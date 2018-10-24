<?php

    class Funcionario{

        private $id;
        private $nome;
        private $cpf;
        private $dtNascimento;
        private $cargo;
        private $sexo;
        private $email;
        private $celular;
        private $nivel;
        private $idNivel;
        private $idEndereco;
        private $idSituacao;
        private $dtContratacao;
        private $senha;

        public function setId($id){

            $this->id = $id;

        }

        public function getId(){

            return $this->id;

        }

        public function setIdEndereco($idEndereco){

            $this->idEndereco = $idEndereco;

        }

        public function getIdEndereco(){

            return $this->idEndereco;

        }

        public function setNome($nome){

            $this->nome = $nome;

        }

        public function getNome(){

            return $this->nome;

        }

        public function setCPF($cpf){

            $this->cpf = $cpf;

        }

        public function getCPF(){

            return $this->cpf;

        }

        public function setDtNascimento($dtNascimento){

            $this->dtNascimento = $dtNascimento;

        }

        public function getDtNascimento(){

            return $this->dtNascimento;

        }

        public function setCargo($cargo){

            $this->cargo = $cargo;

        }

        public function getCargo(){

            return $this->cargo;

        }

        public function setSexo($sexo){

            $this->sexo = $sexo;

        }

        public function getSexo(){

            return $this->sexo;

        }

        public function setEmail($email){

            $this->email = $email;

        }

        public function getEmail(){

            return $this->email;

        }

        public function setCelular($celular){

            $this->celular = $celular;

        }

        public function getCelular(){

            return $this->celular;

        }

        public function setNivel($nivel){

            $this->nivel = $nivel;

        }

        public function getNivel(){

            return $this->nivel;

        }

        public function setIdNivel($idNivel){

            $this->idNivel = $idNivel;

        }

        public function getIdNivel(){

            return $this->idNivel;

        }
        public function setIdSituacao($idSituacao){

            $this->idSituacao = $idSituacao;

        }

        public function getIdSituacao(){

            return $this->idSituacao;

        }

        public function setDtContratacao($dtContratacao){

            $this->dtContratacao = $dtContratacao;

        }

        public function getDtContratacao(){

            return $this->dtContratacao;

        }

        public function setSenha($senha){

            $this->senha = $senha;

        }

        public function getSenha(){

            return $this->senha;

        }

    }

 ?>
