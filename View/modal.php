<html>
    <head>
        <meta charset="utf-8">
        <link href="CSS/style_modal.css" rel="stylesheet" type="text/css"> 
        <script>
            $(document).ready(function(){
               $(".fechar").click(function(){
                  $(".container").fadeOut(400);
               
                });
            
            });
    
        </script>
    </head>
    <body>
        <div id="header">
            Dados dos Clientes
        </div>
        
        <div id="content_modal">
            <div class="item">
                <div class="itens_modal" > Nome: </div> <div class="dados" id="txt_nome"></div>
            </div>
            <div class="item">
                <div class="itens_modal" > Celular: </div> <div class="dados" id="txt_celular"></div>
            </div>
            <div class="item">
                <div class="itens_modal" > Data: </div> <div class="dados" id="txt_data"></div>
            </div>
            <div class="item">
                <div class="itens_modal" > CPF: </div> <div class="dados" id="txt_cpf"></div>
            </div>
            <div class="item">
                <div class="itens_modal" > Genero: </div> <div class="dados" id="txt_genero"></div>
            </div>
            <div class="item">       
                    <div class="itens_modal" > Email: </div> <div class="dados" id="txt_email"></div>
            </div>
            <div class="item">       
                    <div class="itens_modal" > Sugestao: </div> <div class="dados" id="txt_endereco" ></div>
            </div>
            <div class="item">       
                    <div class="itens_modal" > Sexo: </div> <div class="dados"></div>
            
            </div>
        </div>
        <div id="fechar">
            <input type="button" value="fechar" class="fechar">
        </div>
    </body>
</html>