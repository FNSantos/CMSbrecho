<?php 

    require_once("Model/Produto.php");
    require_once("Model/ProdutoDAO.php");
    require_once("Model/Subcategoria.php");
    require_once("Model/SubcategoriaDAO.php");
    
    session_start();

    class ProdutoControl{
        
        public function inserir(){
            
            $produto = new Produto();
            $produtoDAO = new ProdutoDAO();
            $subcategoria = new Subcategoria();
            $subcategoriaDAO = new SubcategoriaDAO();
            
            $produto->setNome($_POST["nome"]);
            $produto->setPropostaPreco($_POST["proposta_preco"]);
            //$produto->setPrecoFinal($_POST["preco_final"]);
            $produto->setDescricao($_POST["descricao"]);
            $produto->setIdSubcategoria($_POST["id_subcategoria"]);
            $produto->setIdSituacao($_POST["id_situacao"]);
            
            $foto = $_FILES['tbl_imagem'];
            
            $upload = new UploadImagem();
            
            $nome_imagem=$upload->Upload($foto);
            
            $produto->setIdProduto($produtoDAO->inserir($produto));
            
            $produtoDAO->inserirFiltro($produto->getIdProduto(), $_POST["marca"]);
            $produtoDAO->inserirFiltro($produto->getIdProduto(), $_POST["tamanho"]);
            $produtoDAO->inserirFiltro($produto->getIdProduto(), $_POST["cor"]);
            
//            $produtoDAO->inserirImagem
            
        }
        
        
        
    
        
        public function atualizar(){
            
            $produto = new Produto();
            
            $produtoDAO = new ProdutoDAO();
            
            $produto->setId($_SESSION["id"]);
            $produto->setNome($_POST["nome"]);
            $produto->setPropostaPreco($_POST["proposta_preco"]);
            $produto->setPrecoFinal($_POST["preco_final"]);            
            $produto->setDescricao($_POST["descricao"]);            
            $produto->setIdSubcategoria($_POST["id_subcategoria"]);            
            $produto->setIdSituacao($_POST["id_situacao"]);            
            
            $produtoDAO->atualizar($produto);
            
        }
        
        public function remover(){
            
            $produtoDAO = new ProdutoDAO();
            
            $produtoDAO->produto($_POST["id"]);
            
        }
        
        public function obterTodos(){
            
            $produtoDAO = new ProdutoDAO();

            $listaProdutos = array();

            $listaProdutos = $produtoDAO->obterTodos();
            
            echo('<tr id="table_title">');
            echo('<td>nome</td>');
            echo('<td>proposta_preco</td>');
            echo('<td>descricao</td>');
            echo('<td>opções</td>');
            echo('</tr>');
            
            foreach ($listaProdutos as $produto){
                
                 echo('<tr>');
                echo('<td class="column_content">'.$produto->getNome().'</td>');
                echo('<td class="column_content">'.$produto->getPropostaPreco().'</td>');
                echo('<td class="column_content">'.$produto->getDescricao().'</td>');
                echo('<td class="column_content">');
                echo('<img src="Imagens/excluir.png" alt="Excluir Produto" style="margin:0px;" onclick="remover('.$produto->getId().')">');
                echo('<a href="adm_produtos.php"><img src="Imagens/editar.png" alt="Editar Produto" onclick="obterUm('.$produto->getId().')" style="width:40px;height:40px;margin-left:10px;"></a>');
                echo('<img src="Imagens/check_true.png" alt="Ativar/Desativar Produto" onclick="atualizarSituacao('.$produto->getId().')">');
                echo('</td>');
                echo('</tr>');
   
                
            }
            
            
        }
       public function obterFiltro(){
            
            $produtoDAO = new ProdutoDAO();
            
            $listaFiltros = array();
            
            $listaFiltros =  $produtoDAO->obterFiltro($_POST["id_tipo_filtro"]);
                      
            echo("<option value='0'>Selecione um Filtro</option>");
            
            foreach($listaFiltros as $filtro){
                
                echo("<option value='".$filtro->getIdProduto()."'>".$filtro->getNome()."</option>");
                
            }
            
        }
        
        public function obterEstilo(){
            
            $produto = new ProdutoDAO();
            
            $listaEstilos = array();
            
            $listaEstilos = $produto->obterEstilo();
            
            echo("<option value='0'>Selecione um Estilo</option>");
            
            foreach($listaEstilos as $produto){
                
                echo("<option value='".$produto->getIdProduto()."'>".$produto->getNome()."</option>");
                
            }
            
        }
        
        public function obterCategoria(){
            
            $produto = new ProdutoDAO();
            
            $listaCategoria = array();
            
            $listaCategoria = $produto->obterCategoria();
            
            echo("<option value='0'>Selecione uma Categoria</option>");
            
            foreach($listaCategoria as $produto){
                
                echo("<option value='".$produto->getIdProduto()."'>".$produto->getNome()."</option>");
                
            }
            
        }
        
        public function obterSubcategoria(){
            
            $produto = new ProdutoDAO();
            
            $listaSubcategoria = array();
            
            $listaSubcategoria = $produto->obterSubcategoria();
            
            echo("<option value='0'>Selecione uma Subcategoria</option>");
            
            foreach($listaSubcategoria as $produto){
                
                echo("<option value='".$produto->getIdProduto()."'>".$produto->getNome()."</option>");
                
            }
            
        }
        
        
        
        public function obterUm(){
            
            echo("!!!!!!!!!!!");
            
            $produtoDAO = new ProdutoDAO();
            
            echo(json_encode($produtoDAO->obterUm($_POST["id"])));
            
        }
        
        
            
            
            
        
    }

    

?>