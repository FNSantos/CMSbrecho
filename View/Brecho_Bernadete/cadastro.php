<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styleCadastroUsuario.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>


    <?php

        include("header.php");

    ?>


<div id="main">
    <div id="main_content" style="padding-top:100px;min-height:900px; height: auto;">

    <div id="cadastro">

        <div id="cadastrando">
            <div class="titulo" style="width: 1000px; background-color: white;" >
                Cadastro
            </div>

            <div id="dados">
                <form name="frmcadastro" method="post" action="cadastro.php">
                <div id="cadastrando_dados" style="background-color: white;">

                    <div class="linha">
                        <div class="campo_cadastro" style="margin-top: 0px;">
                            <div class="titulo_cadastro">Nome</div>
                            <div class="icone_cadastro">
                                <img src="imagens/imagensCadastro/user_name.png">
                            </div>
                            <div class="input_cadastro">
                                <input type="text" name="txt_nome" class="inputs" size="25" maxlength="30" value="" laceholder="">
                            </div>
                        </div>

                        <div class="campo_cadastro" style="margin-top: 20px;">
                            <div class="titulo_cadastro">CPF</div>
                            <div class="icone_cadastro">
                                <img src="imagens/imagensCadastro/iconcpf.png" style="width:50px; height:50px;">
                            </div>
                            <div class="input_cadastro">
                                <input type="text" name="txt_senha" class="inputs" size="25" maxlength="30" value="" laceholder="">
                            </div>
                        </div>


                    </div>

                    <div class="linha">

                        <div class="campo_cadastro">
                            <div class="titulo_cadastro" style="width:350px;">Data de Nascimento</div>
                            <div class="icone_cadastro">
                                <img src="imagens/imagensCadastro/iconecalendario%20.png">
                            </div>
                            <div class="input_cadastro">
                                <input type="text" name="txt_dtnasc" class="inputs" size="25" maxlength="30" value="" laceholder="">
                            </div>
                        </div>

                        <div class="campo_cadastro" style="margin-top: 20px;">
                            <div class="titulo_cadastro">Telefone</div>
                            <div class="icone_cadastro">
                                <img src="imagens/imagensCadastro/icontelefone.png">
                            </div>
                            <div class="input_cadastro">
                                <input type="text" name="txt_telefone" class="inputs" size="25" maxlength="30" value="" laceholder="">
                            </div>
                        </div>

                    </div>

                    <div class="linha">
                        <div class="campo_cadastro">
                            <div class="titulo_cadastro">Email</div>
                            <div class="icone_cadastro">
                                <img src="imagens/imagensCadastro/iconeemail.png">
                            </div>
                            <div class="input_cadastro">
                                <input type="text" name="txt_email" class="inputs" size="25" maxlength="30" value="" laceholder="">
                            </div>
                        </div>

                        <div class="campo_cadastro" style="margin-top: 10px;">
                            <div class="titulo_cadastro">Sexo</div>
                            <div class="input_cadastro" style="margin-top: 15px;">
                                <input class="sexo" type="radio" name="rdosexo" value="F"  /> <a style="font-size: 22px;">Feminino</a>
                               <input class="sexo" type="radio" name="rdosexo" value="M" /><a style="font-size: 22px;">Masculino</a>
                            </div>
                        </div>


                    </div>

                    <div class="linha">
                        <div class="campo_cadastro" >
                            <div class="titulo_cadastro" style="float:left; line-height: 3; height: 70px;">Logradouro:</div>
                            <div id="logradouro" style="float:left; line-height: 3; height: 70px;">
                                <input id="campo_logradouro" value="" name="txt_logradouro" type="text"/>
                            </div>
                        </div>


                        <div class="campo_cadastro">
                            <div class="titulo_cadastro" style="float:left; line-height: 3; height: 70px; width: 80px;">Numero:</div>
                            <div id="numero" style="float:left; line-height: 3; height: 70px; width: 80px;">
                                <input id="campo_numero" value="" name="txt_numero" type="text"/>
                            </div>
                        </div>

                    </div>


                    <div class="linha">
                        <div class="campo_cadastro">
                            <div class="titulo_cadastro" style="float:left; line-height: 3; height: 70px; width:100px;">Bairro:</div>
                            <div id="bairro" style="float:left; line-height: 3; height: 70px; width: 80px;">
                                <input id="campo_bairro" value="" name="txt_bairro" type="text"/>
                            </div>
                        </div>

                        <div class="campo_cadastro">
                            <div class="titulo_cadastro" style="float:left; line-height: 3; height: 70px; width: 80px;">Complemento:</div>
                            <div id="complemento" style="float:left; line-height: 3; height: 70px; width: 80px;">
                                <input id="campo_complemento" value="" name="txt_complemento" type="text"/>
                            </div>
                        </div>


                    </div>

                    <div class="linha" style="height: 200px;">

                        <div class="campo_cadastro" style="height: 175px;">
                            <div class="titulo_cadastro" style="line-height: 2.5; height: 70px;">Município:</div>
                            <div id="municipio">
                                <select selected id="municipios">
                                    <option id="slt_municipio" selected>Selecione um Município</option>
                                    <option>Jandira</option>
                                    <option>Barueri</option>
                                    <option>Osasco</option>
                                    <option>Itapevi</option>
                                </select>
                            </div>
                        </div>

                        <div class="campo_cadastro" style="height: 175px;">
                            <div class="titulo_cadastro" style="line-height: 2.5; height: 70px;">Estado:</div>
                            <div id="estado">
                                <select selected id="estados">
                                    <option id="slt_estado" selected>Selecione um Estado</option>
                                    <option>São Paulo</option>
                                    <option>Rio de Janeiro</option>
                                    <option>Acre</option>
                                    <option>Bahia</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="linha">
                        <div class="campo_cadastro" style=" width: 1000px;">
                            <div class="titulo_cadastro" style="float:left; line-height: 3; height: 70px; width: 80px;">CEP:</div>
                            <div id="cep">
                                <input id="campo_cep" value="" name="txtcep" type="text"/>
                            </div>
                        </div>
                    </div>

                    <div class="linha">

                    <div class="campo_cadastro" style="margin-top: 0px;">
                        <div class="titulo_cadastro">Senha</div>
                        <div class="icone_cadastro">
                            <img src="imagens/imagensCadastro/iconsenha.png">
                        </div>
                        <div class="input_cadastro">
                            <input type="text" name="txt_senha" class="inputs" size="25" maxlength="30" value="" laceholder="">
                        </div>
                    </div>

                        <div class="campo_cadastro" style="margin-top: 0px;">
                            <div class="titulo_cadastro" style="width: 250px;">Confirme a senha</div>
                            <div class="icone_cadastro">
                                <img src="imagens/imagensCadastro/iconsenha.png">
                            </div>
                            <div class="input_cadastro">
                                <input type="text" name="txt_senha" class="inputs" size="25" maxlength="30" value="" laceholder="">
                            </div>
                        </div>
                    </div>

                    </div>


            </form>
            <div id="btn_cadastro">
                <input id="btn_cadastrar" type="button" name="btn_cadastrar_usuario" value="Cadastrar">
            </div>
            </div>



        </div>

    </div>
    </div>

</div>

<footer style="margin-top: 100px;">

    <?php

        include("footer.php");

    ?>

</footer>

</body>

</html>
