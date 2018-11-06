<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="View/CSS/style.css">
        <script src="View/JavaScript/jquery-3.3.1.js" charset="utf-8"></script>
        <script>

            function autenticar(){

                $.post("router.php", {

                    email: $("#txt_email").val(),
                    senha: $("#txt_senha").val(),
                    classe: "funcionario",
                    acao: "autenticar"

                }).done(function(dados){

                    // alert(dados)

                    if(dados != ""){

                        document.location.href = "http://localhost/CMS_Brecho/View/adm_estilo.php";

                    } else {

                        alert("Erro na Autenticação.");

                    }

                });

            }

            $(document).ready(function(){

                $.post("router.php", {

                    classe: "funcionario",
                    acao: "matarSessao"

                });


            });

        </script>
        <title>CMS Bernadete | Autenticação</title>
        <style>
            input[type="text"]{
                border-radius: 5px;
            }
            input[type="password"]{
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div id="main" style="height:1150px;padding-top:50px;">
            <div id="login_content">
                <div id="logo">
                    <img src="View/Imagens/logo_brecho.png" alt="">
                </div>
                <div class="content_input" style="margin-top:50px;">
                    <div class="title_input" style="color:#ffffff;" >
                        E-mail
                    </div>
                    <input type="text" name="txt_email" id="txt_email" placeholder="Digite o seu e-mail." class="input_text" style="width:500px;">
                </div>
                <div class="content_input" style="margin-top:20px;">
                    <div class="title_input" style="color:#ffffff;" >
                        Senha
                    </div>
                    <input type="password" name="txt_senha" id="txt_senha" placeholder="Digite a sua senha." class="input_text" style="width:500px;">
                </div>
                <button name="btn_login" class="buttons" style="margin-left:470px;" onclick="autenticar()">Entrar</button>
            </div>
        </div>
    </body>
</html>
