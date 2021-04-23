<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <title>Tela de Login</title>
</head>
<body>
    
    <header>

        <div class="center">

            <div class="logo">
                <h2>Apostas Desportiva</h2>
                <h3>Casa Desportiva para Mulheres Emponderadas<h3>
            </div><!--DIV LOGO-->

            <form method="post" class="form-login">

                <div class="form-element">
                    <p>E-mail ou Celular:</p>
                    <input type="email"/>
                </div><!--DIV FORM-ELEMENT-->

                <div class="form-element">
                    <p>Digite sua Senha:</p>
                    <input type="password"/>
                </div><!--DIV FORM-ELEMENT-->

                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar"/>
                </div><!--DIV FORM-ELEMENT-->

            </form><!--FORM-LOGIN-->

            <div class="clear"></div>

        </div><!--DIV CENTER-->

    </header>

    <section class="main">

        <div class="center">
            <div class="img-pessoas">
                <img src="Rugby Sevens Japão.jpg" width="40%" />
                <img src="no.jpeg" width="40%" />
                <img src="ola.jpg" width="90%" />
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>Deposito de até 150%</h3>
            </div><!--DIV ABRIR-CONTA-->

            <div class="clear"></div>

            <form class="criar-conta">
                <div class="W50">
                    <input placeholder="Nome" type="text">
                </div><!--DIV w50-->

                <div class="W50">
                    <input placeholder="SobreNome" type="text">
                </div><!--DIV w50-->

                <div class="W100">
                    <input placeholder="E-mail" type="email">
                </div><!--DIV w100-->

                <div class="W100">
                    <input placeholder=" Crie uma Password" type="password">
                </div><!--DIV w100-->

                <div class="W100">
                    <h2>Data de Nascimento:</h2>

                    <select name="nascimento-dia" class="nascimento">
                        <?php
                            for($i = 1; $i <= 31; $i++){
                        ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                    </select>

                    <select name="nascimento-mês" class="nascimento">
                    <option value="0">Janeiro</option>
                    <option value="0">Fevereiro</option>
                    <option value="0">Março</option>
                    <option value="0">Abril</option>
                    <option value="0">Maio</option>
                    <option value="0">Junho</option>
                    <option value="0">Julho</option>
                    <option value="0">Agosto</option>
                    <option value="0">Setembro</option>
                    <option value="0">Outubro</option>
                    <option value="0">Novembro</option>
                    <option value="0">Dezembro</option>
                    </select>

                    <select name="nascimento-ano" class="nascimento">
                    <?php
                            for($i = 1945; $i <= 2015; $i++){
                        ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                    </select>
                    <div class="clear"></div>

                </div><!--DIV W100-->

                <div class="W100">
                    <input placeholder="Numero Fiscal" type="text">
                </div><!--DIV w100-->

                <div class="W100">
                    <div class="input-radio">
                        <input type="radio" name="sexo" value="Masculino">
                        <h2>Masculino</h2>
                    </div><!--RADIO-->

                    <div class="input-radio">
                        <input type="radio" name="sexo" value="Feminino">
                        <h2>Feminino</h2>
                    </div><!--RADIO-->
                </div>



                <div class="W100">
                    <input type="submit" name="acao" value="Cadastrar!">
                </div>
            </form><!-- FORM CRIAR-CONTA-->


            <div class="clear"></div>
        </div><!--DIV CENTER-->
    </section><!--MAIN-->




</body>
</html>