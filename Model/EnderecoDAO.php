<?php

    require_once("ConexaoBanco.php");
    require_once("Endereco.php");

    class EnderecoDAO{

        public function inserir(Endereco $endereco){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_endereco(logradouro, cep, bairro, numero, id_cidade) VALUES(?, ?, ?, ?, ?)";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $endereco->getLogradouro());
            $stm->bindValue(2, $endereco->getCEP());
            $stm->bindValue(3, $endereco->getBairro());
            $stm->bindValue(4, $endereco->getNumero());
            $stm->bindValue(5, $endereco->getIdCidade());

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

        public function inserirEstado(Endereco $endereco){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_estado WHERE id_estado = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $endereco->getIdEstado());

            $stm->execute();

            if($stm->rowCount() <= 0){

                $SQL = "INSERT INTO tbl_estado(id_estado, nome) VALUES(?, ?)";

                $stm = $conexao->prepare($SQL);

                $stm->bindValue(1, $endereco->getIdEstado());
                $stm->bindValue(2, $endereco->getEstado());

                $stm->execute();

                $conexao = null;

            }

        }

        public function inserirCidade(Endereco $endereco){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_cidade WHERE id_cidade = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $endereco->getIdCidade());

            $stm->execute();

            echo("!!!Fora".$stm->rowCount());

            if($stm->rowCount() <= 0){

                echo("!!!Dentro");

                $SQL = "INSERT INTO tbl_cidade(nome, id_estado) VALUES(?, ?)";

                $stm = $conexao->prepare($SQL);

                $stm->bindValue(1, $endereco->getCidade());
                $stm->bindValue(2, $endereco->getIdEstado());

                $stm->execute();

                $SQL = "SELECT LAST_INSERT_ID()";

                $stm = $conexao->prepare($SQL);

                $stm->execute();

                $stm->setFetchMode(PDO::FETCH_ASSOC);

                $resultSet = $stm->fetch();

                $conexao = null;

                return $resultSet["LAST_INSERT_ID()"];

            }

        }

    }

 ?>
