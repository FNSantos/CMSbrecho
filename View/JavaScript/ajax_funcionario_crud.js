let rota = "../router.php"

let modo = ""

function obterAutenticacao(){

    $.post(rota, {

        classe:"funcionario",
        acao:"obterAutenticacao"

    }).done(function(dados){

        if(dados == ""){

            document.location.href = "http://localhost/CMS_Brecho/";

        }

    });

}

function inserir(){
    
    /*$.each($('form input:'), function(){
            if($(i).val().trim().length == 0) {
                alert('field is empty!');
            }
        });
      
      */
    let elemento = document.getElementById("slt_municipio");

    let cidade = elemento.options[elemento.selectedIndex].text;

    elemento = document.getElementById("slt_estado");

    let estado = elemento.options[elemento.selectedIndex].text;

    $.post(rota, {

        classe:"funcionario",
        acao:"inserir",
        nome:$("#txt_nome").val(),
        cpf:$("#txt_cpf").val(),
        dtNascimento:$("#txt_dt_nasc").val(),
        cargo:$("#txt_cargo").val(),
        sexo:$("#rdo_sexo").val(),
        email:$("#txt_email").val(),
        celular:$("#txt_celular").val(),
        logradouro:$("#txt_logradouro").val(),
        numero:$("#txt_numero").val(),
        bairro:$("#txt_bairro").val(),
        cep:$("#txt_cep").val(),
        idCidade:$("#slt_municipio").val(),
        idEstado:$("#slt_estado").val(),
        idNivel:$("#slt_nivel").val(),
        dtContratacao:$("#txt_dt_contr").val(),
        senha:$("#txt_senha").val(),
        estado:estado,
        cidade:cidade,
        confirmar:$("#txt_confirmar").val()

    }).done(function(dados){

        alert(dados);

        obterTodos();

    });

      
}

function obterTodos(){

    $.post(rota, {

        classe:"funcionario",
        acao:"obterTodos"

    }).done(function(dados){

        $("#table_content").html(dados);

    });

}

function obterNiveis(){

    $.post(rota, {

        classe:"funcionario",
        acao:"obterNiveis"

    }).done(function(dados){

        // alert(dados);

        $("#slt_nivel").html(dados);

    });

}

function obterEstados(){

    $.getJSON("https://servicodados.ibge.gov.br/api/v1/localidades/estados", function(dados){

        let option = "<option value='0'>Selecione o Estado</option>";

        for(let i = 0; i < dados.length; i++){

            option += "<option value='"+dados[i].id+"'>"+dados[i].nome+"</option>";

        }

        $("#slt_estado").html(option);

    });

}

function obterCidades(idEstado){

    $.getJSON("https://servicodados.ibge.gov.br/api/v1/localidades/estados/"+idEstado+"/municipios", function(dados){

        if(idEstado == 0){

            $("#slt_cidade").html("<option value='0'>Selecione o Estado primeiro</option>");

        } else {

            var option = "<option value='0'>Selecione o Município</option>";

            for(var i = 0; i < dados.length; i++){

                option += "<option value='"+dados[i].id+"'>"+dados[i].nome+"</option>";

            }

        }

        $("#slt_municipio").html(option);

    });

}

function obterUm(){
    
    $.post(rota, {

        classe:"funcionario",
        acao:"obterUm",
        idFuncionario:$("#id_funcionario").val()

    }).done(function(dados){


        let funcionario = JSON.parse(dados);

        
        $("#txt_nome").val(funcionario["nome"]);
        $("#txt_cpf").val(funcionario["cpf"]);
        $("#txt_dt_nasc").val(funcionario["data_nascimento"]);
        $("#txt_cargo").val(funcionario["cargo"]);
        $("#rdo_sexo").val(funcionario["sexo"]);
        $("#txt_email").val(funcionario["email"]);
        $("#txt_celular").val(funcionario["celular"]);
        $("#txt_logradouro").val(funcionario["logradouro"]);
        $("#txt_numero").val(funcionario["numero"]);
        $("#txt_bairro").val(funcionario["bairro"]);
        $("#txt_cep").val(funcionario["cep"]);
        $("#txt_dt_contr").val(funcionario["data_contratacao"]);        
        
        if(funcionario["sexo"] == "M"){
            var v = $("#rdo_sexo").val();
            document.getElementById("rdo_sexo").val()checked = true;
        }
        
        setTimeout(function(){
            $('select#slt_estado').find('option').each(function() {
            if($(this).val() == funcionario["id_estado"]){
                $(this).attr('selected', true);
            }
        },3000  );
               
        $('select#slt_nivel').find('option').each(function() {
            if($(this).val() == funcionario["id_nivel"]){
                $(this).attr('selected', true);
            }
        });
        }, 3000)
        
        setTimeout(function(){             
            $('select#slt_municipio').find('option').each(function() {
                if($(this).val() == funcionario["id_cidade"]){
                    $(this).attr('selected', true);
                }
            });
        }, 6000)
        
        

    });
    
    modo = "atualizar";

}

function atualizar(idFuncionario){

    $.post(rota, {

        classe:"funcionario",
        acao:"atualizar",
        idFuncionario: idFuncionario,
        nome:$("#txt_nome").val(),
        cpf:$("#txt_cpf").val(),
        celular:$("#txt_celular").val(),
        cargo:$("#txt_cargo").val(),
        idNivel:$("#slt_nivel").val(),
        endereco:$("#txt_endereco").val()

    }).done(function(dados){

        obterTodos();

    });

    modo = "inserir"
}

function atualizarSituacao(id, situacao){
    
    $.post(rota, {

        classe:"funcionario",
        acao:"atualizarSituacao",
        idFuncionario:id,
        situacao: (situacao == 1 ? 0 : 1)

    }).done(function(dados){

        // alert(dados);

        obterTodos();

    });

}


function remover(idFuncionario){

    $.post(rota, {

        classe:"funcionario",
        acao:"remover",
        idFuncionario: idFuncionario

    }).done(function(dados){

        obterTodos();

    });

}

$(document).ready(function(){

    // obterAutenticacao();

    obterTodos();

    obterEstados();

    obterNiveis();

    $("#slt_estado").click(function(){

        obterCidades($("#slt_estado").val());

    });

    $("#btn_salvar").click(function(){

        if(modo == "atualizar"){

            atualizar();

        } else {

            inserir();

        }

    });

});
