<?php

    require_once("ConexaoBanco.php");
    require_once("Funcionario.php");

    class FuncionarioDAO{

        public function inserir(Funcionario $funcionario){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "INSERT INTO tbl_funcionario(nome, cpf, senha, celular, cargo, data_nascimento, data_contratacao, id_nivel, id_endereco, email, situacao) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $funcionario->getNome());
            $stm->bindValue(2, $funcionario->getCPF());
            $stm->bindValue(3, $funcionario->getSenha());
            $stm->bindValue(4, $funcionario->getCelular());
            $stm->bindValue(5, $funcionario->getCargo());
            $stm->bindValue(6, $funcionario->getDtNascimento());
            $stm->bindValue(7, $funcionario->getDtContratacao());
            $stm->bindValue(8, $funcionario->getIdNivel());
            $stm->bindValue(9, $funcionario->getIdEndereco());
            $stm->bindValue(10, $funcionario->getEmail());            

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return True;

            } else {

                return False;

            }


        }

        public function obterTodos(){

            $conexao = ConexaoBanco::obterConexao();

            $listaFuncionarios = array();

            $SQL = "SELECT f.*, n.nivel FROM tbl_funcionario AS f INNER JOIN tbl_nivel AS n ON f.id_nivel = n.id_nivel";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $funcionario = new Funcionario();

                $funcionario->setId($resultSet["id_funcionario"]);
                $funcionario->setNome($resultSet["nome"]);
                $funcionario->setCPF($resultSet["cpf"]);
                $funcionario->setCelular($resultSet["celular"]);
                $funcionario->setCargo($resultSet["cargo"]);
                $funcionario->setIdNivel($resultSet["id_nivel"]);
                $funcionario->setNivel($resultSet["nivel"]);
                $funcionario->setIdEndereco($resultSet["id_endereco"]);
                $funcionario->setIdSituacao($resultSet["situacao"]);

                $listaFuncionarios[] = $funcionario;

            }

            $conexao = null;

            return $listaFuncionarios;

        }

        public function obterUm($idFuncionario){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT * FROM tbl_funcionario AS f INNER JOIN tbl_endereco AS e ON f.id_endereco = e.id_endereco INNER JOIN tbl_cidade AS c ON e.id_cidade = c.id_cidade WHERE id_funcionario = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $idFuncionario);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            $conexao = null;

            return $resultSet;

        }

        public function atualizar(Funcionario $funcionario){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_funcionario SET nome = ?, cpf = ?, celular = ?, cargo = ?, id_nivel = ?, id_endereco = ? WHERE id_funcionario = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $funcionario->getNome());
            $stm->bindValue(2, $funcionario->getCPF());
            $stm->bindValue(3, $funcionario->getCelular());
            $stm->bindValue(4, $funcionario->getCargo());
            $stm->bindValue(5, $funcionario->getIdNivel());
            $stm->bindValue(6, $funcionario->getIdEndereco());
            $stm->bindValue(7, $funcionario->getId());

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }

        public function remover($idFuncionario){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "DELETE FROM tbl_funcionario WHERE id_funcionario = ?";
            
            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $idFuncionario);

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }

        public function autenticar($email, $senha){
            session_start();
            $conexao = ConexaoBanco::obterConexao();

            $SQL = "SELECT nome, id_funcionario FROM tbl_funcionario WHERE email = ? AND senha = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $email);
            $stm->bindParam(2, $senha);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $nome = "";

            if($resultSet = $stm->fetch()){

                $nome = $resultSet["nome"];
                $_SESSION['idFuncionario'] = $resultSet["id_funcionario"];

            }

            return $nome;

        }
        
        public function atualizarSituacao($situacao, $id){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "UPDATE tbl_funcionario SET situacao = ? WHERE id_funcionario = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindValue(1, $situacao);
            $stm->bindValue(2, $id);

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }
       

    }

 ?>
