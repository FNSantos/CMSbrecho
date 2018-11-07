<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Brechó Bernadete | Pagamento</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/style_pagamento.css">
        <script src="js/jquery.js" charset="utf-8"></script>
    	<!-- <script src="js/menu_scroll.js" charset="utf-8"></script> -->
    </head>
    <body>
        <?php include("header.php"); ?>
        <div id="main">
            <div id="main_content" style="padding-top:50px;">
                <div id="progress_bar">
                    <div class="point_progress" style="margin-left: 30px;background-color: #0edb00;">
                        <img src="imagens/imagens_pagamento/cartao.png" alt="Escolha do Cartão">
                    </div>
                    <div class="line_progress">

                    </div>
                    <div class="point_progress">
                        <img src="imagens/imagens_pagamento/confirmar.png" alt="Confirmar Pedido">
                    </div>
                    <div class="line_progress" style="margin-left:-5px;">

                    </div>
                    <div class="point_progress">
                        <img src="imagens/imagens_pagamento/calendario.png" alt="Data de Retirada">
                    </div>
                </div>
                <div id="step_content">
                    <div class="step_title" style="margin-left:20px;">
                        Escolha Cartão
                    </div>
                    <div class="step_title">
                        Confirmar Pedido
                    </div>
                    <div class="step_title">
                        Finalizar Compra
                    </div>
                </div>
                <div class="payment_content" style="margin-left:50px;width:400px;">
                    <div class="title_content" style="width:400px;">
                        Cadastrar Cartão
                    </div>
                    <div class="content_input">
                        <div class="title_input">
                            Número
                        </div>
                        <input type="text" name="txt_numero" id="txt_numero" class="input_text">
                    </div>
                    <div class="content_input" style="float:left;width:200px">
                        <div class="title_input" style="width:150px;">
                            Vencimento
                        </div>
                        <input type="text" name="txt_numero" id="txt_numero" class="input_text" style="width:150px;">
                    </div>
                    <div class="content_input" style="float:left;width:200px">
                        <div class="title_input" style="width:150px;">
                            CVV
                        </div>
                        <input type="text" name="txt_numero" id="txt_numero" class="input_text" style="width:150px;">
                    </div>
                    <div class="content_input" style="margin-top:140px;">
                        <div class="title_input">
                            Nome Titular
                        </div>
                        <input type="text" name="txt_numero" id="txt_numero" class="input_text">
                    </div>
                    <div class="content_input" style="height:230px;">
                        <div class="title_input">
                            Nome Titular
                        </div>
                        <div class="flags_content">
                            <input type="radio" name="rdo_bandeira" value="Visa" class="input_radio">
                            <div class="flag">
                                <img src="imagens/imagens_pagamento/visa.png" alt="Bandeira Visa">
                            </div>
                            <input type="radio" name="rdo_bandeira" value="MasterCard" class="input_radio">
                            <div class="flag" style="height:70px;width: 110px;">
                                <img src="imagens/imagens_pagamento/mastercard.png" alt="Bandeira MasterCard" style="height:70px;width:90px;margin-left:10px;">
                            </div>
                        </div>
                        <div class="flags_content">
                            <input type="radio" name="rdo_bandeira" value="Hipercard" class="input_radio">
                            <div class="flag">
                                <img src="imagens/imagens_pagamento/hipercard.png" alt="Bandeira Hipercard">
                            </div>
                            <input type="radio" name="rdo_bandeira" value="Elo" class="input_radio">
                            <div class="flag" style="height:70px;width: 120px;">
                                <img src="imagens/imagens_pagamento/elo.png" alt="Bandeira Elo" style="height:55x;width:120px;">
                            </div>
                        </div>
                    </div>
                    <button class="buttons" id="btn_salvar">Salvar</button>
                </div>
                <div class="payment_content" style="min-height:200px;height:auto;">
                    <div class="title_content">
                        Cartões
                    </div>
                    <table>
                        <tr>
                            <td>
                                <img src="imagens/imagens_pagamento/elo.png">
                                <div class="card_data">
                                    5555************<br>
                                    Caio Victo de Sousa Morais
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> <img src="imagens/imagens_pagamento/visa.png">
                                <div class="card_data">
                                    5555************<br>
                                    Caio Victo de Sousa Morais
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> <img src="imagens/imagens_pagamento/mastercard.png" style="width:60px;height:45px;margin-top: 10px;margin-left:5px;">
                                <div class="card_data" style="margin-left:25px;">
                                    5555************<br>
                                    Caio Victo de Sousa Morais
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> <img src="imagens/imagens_pagamento/hipercard.png">
                                <div class="card_data">
                                    5555************<br>
                                    Caio Victo de Sousa Morais
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="payment_content" style="min-height:200px;height:auto;margin-bottom:20px;">
                    <div class="title_content">
                        Parcelas
                    </div>
                    <table>
                        <tr>
                            <td>
                                <div class="card_data" style="width:300px;text-align:center;">
                                    1x R$ 1000,00 <br>
                                    Sem Juros
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="card_data" style="width:300px;text-align:center;">
                                    2x R$ 550,00 <br>
                                    5% de Juros
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="card_data" style="width:300px;text-align:center;">
                                    3x R$ 430,00 <br>
                                    10% de Juros
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="card_data" style="width:300px;text-align:center;">
                                    4x R$ 300,00 <br>
                                    20% de Juros
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <footer>
            <?php include("footer.php"); ?>
        </footer>
    </body>
</html>
