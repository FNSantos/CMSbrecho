<?php

    require_once("Model/Funcionario.php");
    require_once("Model/FuncionarioDAO.php");
    require_once("Model/Endereco.php");
    require_once("Model/EnderecoDAO.php");
    require_once("Model/Nivel.php");
    require_once("Model/NivelDAO.php");

    session_start();

    class FuncionarioControl{

        public function inserir(){

            $funcionario = new Funcionario();
            $funcionarioDAO = new FuncionarioDAO();
            $endereco = new Endereco();
            $enderecoDAO = new EnderecoDAO();

            $funcionario->setNome($_POST["nome"]);
            $funcionario->setCPF($_POST["cpf"]);
            $funcionario->setDtNascimento($_POST["dtNascimento"]);
            $funcionario->setCargo($_POST["cargo"]);
            $funcionario->setSexo($_POST["sexo"]);
            $funcionario->setEmail($_POST["email"]);
            $funcionario->setCelular($_POST["celular"]);
            $funcionario->setIdNivel($_POST["idNivel"]);
            $funcionario->setDtContratacao($_POST["dtContratacao"]);
            $funcionario->setSenha($_POST["senha"]);

            $endereco->setLogradouro($_POST["logradouro"]);
            $endereco->setNumero($_POST["numero"]);
            $endereco->setBairro($_POST["bairro"]);
            $endereco->setCEP($_POST["cep"]);
            $endereco->setIdCidade($_POST["idCidade"]);
            $endereco->setIdEstado($_POST["idEstado"]);
            $endereco->setEstado($_POST["estado"]);
            $endereco->setCidade($_POST["cidade"]);

            if($funcionario->getSenha() != $_POST["confirmar"]){

                echo("Senha diferente na confirmação.");

            } else {

                $enderecoDAO->inserirEstado($endereco);

                $endereco->setIdCidade($enderecoDAO->inserirCidade($endereco));

                $funcionario->setIdEndereco($enderecoDAO->inserir($endereco));

                $funcionarioDAO->inserir($funcionario);

            }

        }
        
         public function atualizar(){
            
            $funcionario = new Funcionario();            
            $funcionarioDAO = new FuncionarioDAO();
            
            $funcionario->setNome($_POST["nome"]);
            $funcionario->setCPF($_POST["cpf"]); 
            $funcionario->setDtNascimento($_POST["dtNascimento"]);
            $funcionario->setCargo($_POST["cargo"]);
            $funcionario->setSexo($_POST["sexo"]);
            $funcionario->setEmail($_POST["email"]);
            $funcionario->setCelular($_POST["celular"]);
            $funcionario->setIdNivel($_POST["idNivel"]);
            $funcionario->setDtContratacao($_POST["dtContratacao"]);
            $funcionario->setSenha($_POST["senha"]);
            $funcionario->setLogradouro($_POST["logradouro"]);
            $funcionario->setNumero($_POST["numero"]);
            $funcionario->setBairro($_POST["bairro"]);
            $funcionario->setCEP($_POST["cep"]);
            $funcionario->setIdCidade($_POST["idCidade"]);
            $funcionario->setIdEstado($_POST["idEstado"]);
            $funcionario->setEstado($_POST["estado"]);
            $funcionario->setCidade($_POST["cidade"]);

            
            
            $funcionarioDAO->atualizar($funcionario);
            
        }

        public function obterTodos(){

            $funcionarioDAO = new FuncionarioDAO();

            $listaFuncionarios = array();

            $listaFuncionarios = $funcionarioDAO->obterTodos();

            echo('<tr id="table_title">');
            echo('<td>Nome</td>');
            echo('<td>Nível</td>');
            echo('<td>Celular</td>');
            echo('<td>Opções</td>');
            echo('</tr>');

            foreach ($listaFuncionarios as $funcionario) {

                echo('<tr>');
                echo('<td class="column_content">'.$funcionario->getNome().'</td>');
                echo('<td class="column_content">'.$funcionario->getNivel().'</td>');
                echo('<td class="column_content">'.$funcionario->getCelular().'</td>');
                echo('<td class="column_content">');
                echo('<img src="Imagens/excluir.png" alt="Excluir Funcionário" style="margin:0px;" onclick="remover('.$funcionario->getId().')">');
                
                echo('<a href="cadastro_funcionario.php?id='.$funcionario->getId().'"><img src="Imagens/editar.png" alt="Editar Funcionário" style="width:40px;height:40px;margin-left:10px;"></a>');
                echo('<img src="Imagens/'.($funcionario->getIdSituacao() == 0 ? "check_true.png" : "check_false.png").'" alt="Ativar/Desativar Funcionário" onclick="atualizarSituacao('.$funcionario->getId().', '.$funcionario->getIdSituacao().')">');                
                echo('</td>');
                echo('</tr>');

            }

        }

        public function obterNiveis(){

            $nivel = new NivelDAO();

            $listaNiveis = array();

            $listaNiveis = $nivel->obterTodos();

            echo("<option value='0'>Selecione o Nível</option>");

            foreach($listaNiveis as $nivel){

                echo("<option value='".$nivel->getId()."'>".$nivel->getNome()."</option>");

            }

        }

        public function obterUm(){

            $funcionarioDAO = new FuncionarioDAO();

            echo(json_encode($funcionarioDAO->obterUm($_POST["idFuncionario"])));

        }

        public function autenticar(){

            $funcionarioDAO = new FuncionarioDAO();

            $nome = $funcionarioDAO->autenticar($_POST["email"], $_POST["senha"]);

            $_SESSION["nome"] = $nome;

            echo($nome);

        }
        public function remover(){

            $funcionarioDAO = new FuncionarioDAO();

            $funcionarioDAO->remover($_POST["idFuncionario"]);

        }

        public function obterAutenticacao(){

            echo($_SESSION["nome"]);

        }
         public function atualizarSituacao(){

            $funcionarioDAO = new FuncionarioDAO();

            echo($_POST["situacao"]);

            $funcionarioDAO->atualizarSituacao($_POST["situacao"], $_POST["idFuncionario"]);

        }

    }

?>
