<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Cadastro de Funcionário</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <script src="JavaScript/jquery-3.3.1.js" charset="utf-8"></script>
        <script src="JavaScript/ajax_funcionario_crud.js" charset="utf-8"></script>
        <script>
            $(document).ready(function(){
               obterUm(); 
            });
        </script>
    </head>
    <body>
        <input id="id_funcionario" type="hidden" value="<?php echo $_GET['id'];?>">
        <?php require_once("cabecalho.php")?>
        <div id="main">
            <div id="main_content">
                <?php require_once("menu.php") ?>
                <div id="content">
                    <div class="title_content" style="float:none;">
                        Cadastro de Funcionários
                    </div>
                    <div class="line_input">
                        <div class="content_input">
                            <div class="title_input">
                                Nome
                            </div>
                            <input type="text" name="txt_nome" id="txt_nome" placeholder="Digite o nome do funcionário." class="input_text">
                        </div>
                        <div class="content_input" style="width:320px;">
                            <div class="title_input">
                                CPF
                            </div>
                            <input type="text" name="txt_cpf" id="txt_cpf" placeholder="Digite o CPF do funcionário." class="input_text" style="width:300px;" maxlength="11" title="Apenas numeros sao aceitos" >
                        </div>
                    </div>
                    <div class="line_input">
                        <div class="content_input" style="width: 250px;">
                            <div class="title_input" style="width: 240px;">
                                Data de Nascimento
                            </div>
                            <input type="date" name="txt_dt_nasc" id="txt_dt_nasc" placeholder="Ex: 22/09/18" class="input_text" style="width: 200px;" >
                        </div>
                        <div class="content_input" style="width:320px;">
                            <div class="title_input">
                                Cargo
                            </div>
                            <input type="text" name="txt_cargo" id="txt_cargo" placeholder="Digite o cargo do funcionário." class="input_text" style="width:300px;">
                        </div>
                        <div class="content_input" style="width:320px;">
                            <div class="title_input">
                                Sexo
                            </div>
                            <input type="radio" name="rdo_sexo" id="rdo_sexo" value="F" class="input_radio" style="margin-left:10px;">
                            <div class="radio_title">
                                Feminino
                            </div>
                            <input type="radio" name="rdo_sexo" id="rdo_sexo" value="M" class="input_radio">
                            <div class="radio_title">
                                Masculino
                            </div>
                        </div>
                    </div>
                    <div class="line_input">
                        <div class="content_input">
                            <div class="title_input">
                                E-mail
                            </div>
                            <input type="email" name="txt_email" id="txt_email" placeholder="Digite o e-mail do funcionário." class="input_text">
                        </div>
                        <div class="content_input" style="width:320px;">
                            <div class="title_input">
                                Celular
                            </div>
                            <input type="text" name="txt_celular" id="txt_celular" placeholder="Ex: 94356-7654" class="input_text" style="width:300px;" maxlength="10">
                        </div>
                    </div>
                    <div class="line_input">
                        <div class="content_input">
                            <div class="title_input">
                                Logradouro
                            </div>
                            <input type="text" name="txt_logradouro" id="txt_logradouro" placeholder="Digite o logradouro do funcionário." class="input_text">
                        </div>
                        <div class="content_input" style="width:320px;">
                            <div class="title_input">
                                Número
                            </div>
                            <input type="text" name="txt_numero" id="txt_numero" placeholder="Número da residência." class="input_text" style="width:300px;">
                        </div>
                    </div>
                    <div class="line_input">
                        <div class="content_input">
                            <div class="title_input">
                                Bairro
                            </div>
                            <input type="text" name="txt_bairro" id="txt_bairro" placeholder="Digite o bairro." class="input_text">
                        </div>
                        <div class="content_input" style="width:320px;">
                            <div class="title_input">
                                CEP
                            </div>
                            <input type="text" name="txt_cep" id="txt_cep" placeholder="CEP da residência." class="input_text" style="width:300px;" maxlength="9">
                        </div>
                    </div>
                    <div class="line_input">
                        <div class="content_input" style="width:500px;">
                            <div class="title_input">
                                Estado
                            </div>
                            <select name="slt_estado" id="slt_estado" class="input_select">
                            </select>
                        </div>
                        <div class="content_input" style="width:500px;margin-left:0px;">
                            <div class="title_input">
                                Município
                            </div>
                            <select name="slt_municipio" id="slt_municipio" class="input_select">
                                <option value="0">Selecione o Município</option>
                            </select>
                        </div>
                    </div>
                    <div class="line_input">
                        <div class="content_input" style="width:500px;">
                            <div class="title_input">
                                Nível
                            </div>
                            <select name="slt_nivel" id="slt_nivel" class="input_select">
                                <option value="0">Selecione o Nível</option>
                            </select>
                        </div>
                        <div class="content_input" style="width:350px;margin-left:0px;">
                            <div class="title_input" style="width:300px;">
                                Data de Contratação
                            </div>
                            <input type="date" name="txt_dt_contr" id="txt_dt_contr" placeholder="Ex: 12/08/18." class="input_text" style="width:200px;">
                        </div>
                    </div>
                    <div class="line_input">
                        <div class="content_input" style="width:450px;">
                            <div class="title_input">
                                Senha
                            </div>
                            <input type="password" name="txt_senha" id="txt_senha" placeholder="Digite o nome do funcionário." class="input_text" style="width:440px;">
                        </div>
                        <div class="content_input" style="width:450px;margin-left:50px;">
                            <div class="title_input">
                                Confirmar Senha
                            </div>
                            <input type="password" name="txt_confirmar" id="txt_confirmar" placeholder="Digite o CPF do funcionário." class="input_text" style="width:440px;" > 
                        </div>
                    </div>
                    <div class="line_input">
                        <button name="btn_salvar" id="btn_salvar" class="buttons" style="margin-left:830px;">Salvar</button>
                        <a href="adm_funcionario.php">
                            <button name="btn_cancelar" class="buttons">Cancelar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
