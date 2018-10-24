<?php

    require_once("ConexaoBanco.php");
    require_once("Funcionario.php");

    class Endereco{

        private $idEndereco;
        private $idEstado;
        private $idCidade;
        private $logradouro;
        private $numero;
        private $bairro;
        private $cep;
        private $estado;
        private $sigla;
        private $cidade;

        public function setIdEndereco($idEndereco){

            $this->idEndereco = $idEndereco;

        }

        public function getIdEndereco(){

            return $this->idEndereco;

        }

        public function setIdCidade($idCidade){

            $this->idCidade = $idCidade;

        }

        public function getIdCidade(){

            return $this->idCidade;

        }

        public function setIdEstado($idEstado){

            $this->idEstado = $idEstado;

        }

        public function getIdEstado(){

            return $this->idEstado;

        }

        public function setLogradouro($logradouro){

            $this->logradouro = $logradouro;

        }

        public function getLogradouro(){

            return $this->logradouro;

        }

        public function setNumero($numero){

            $this->numero = $numero;

        }

        public function getNumero(){

            return $this->numero;

        }

        public function setBairro($bairro){

            $this->bairro = $bairro;

        }

        public function getBairro(){

            return $this->bairro;

        }

        public function setCEP($cep){

            $this->cep = $cep;

        }

        public function getCEP(){

            return $this->cep;

        }

        public function setEstado($estado){

            $this->estado = $estado;

        }

        public function getEstado(){

            return $this->estado;

        }

        public function setSigla($sigla){

            $this->sigla = $sigla;

        }

        public function getSigla(){

            return $this->sigla;

        }

        public function setCidade($cidade){

            $this->cidade = $cidade;

        }

        public function getCidade(){

            return $this->cidade;

        }

    }

 ?>
