<?php
    require_once("Model/uploadImagem.php");


    class UploadImagem{
       $imagem = new Imagem();
        
        public function inserir(){

        // Para recuperar um dado do tipo file é obrigatorio usar $_FILES
        
        //usar o comando base name quando nao retornar apenas o nome
        //dependendo  da versao do php ele vai trazer o caminho
        $nome_arquivo = basename();
        
        //echo($nome_foto[0]); 
        
        $ext = strrchr($nome_arquivo,".");
        
        //separa o nome do arquivo e a extensao do arquivo em uma matriz
        $nome_foto = pathinfo($nome_arquivo, PATHINFO_FILENAME);       
                
        $nomeArquivo = md5(uniqid(time()).$nome_foto).$ext; 
        
        $tamanho_arquivo = round(($_FILES['flefoto']['size']/1024));
        //echo($tamanho_arquivo);
        
        //echo(strrchr($nome_arquivo,"."));
        
        //Nome da pasta que foi criado para guardar as fotos
        $upload_dir = "../View/Imagens/arquivos/";
        
        $arquivos_permitidos = array(".jpg", ".png", ".gif", ".svg", ".jpeg");
        
        $caminho_imagem = $upload_dir.$nomeArquivo;
        
        if(in_array($ext, $arquivos_permitidos)){
            
           if($tamanho_arquivo <= 5120){
               //pegando o arquivo 
               $arquivo_tmp = $_FILES['flefoto']['tmp_name'];
               //movendo o arquivo da pasta temporario para o servidor
               if(move_uploaded_file($arquivo_tmp, $caminho_imagem)){
                   
                   /*$sql="INSERT INTO tbl_fotos(nome, foto)
                        VALUES('".$nome."','".$caminho_imagem."')";
                   mysql_query($sql);
                   header('location:index.php');*/
                   
                   echo("<img src='".$caminho_imagem."'>");
                   echo("
                        <script>
                            frmCadastro.txtfoto.value = '$caminho_imagem';
                        
                        </script>
                   ");
                   
               }else{
                   echo('Erro ao enviar o arquivo para o Servidor.');
               }
           }else{
               echo("<script> alert ('Erro : Tamanho do arquivo Invalido')</script>");
           }
        }else{
            echo("arquivo nao permitido");
        }
    }
 
    }
    
?>