<!doctype html>
<html>

<head>
    

    <title>Jobbox</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FOOTER-->
    <!--===============================================FOOTER================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./css/style_footer.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--=================================================FORMS==============================================-->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--======================================================NAVBAR=========================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/frm_altera_exp.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <!--=======================================================DARKMODE========================================-->
    <link rel="stylesheet" type="text/css" href="darkmode.css">
    <!--=======================================================BOTAO REGISTRAR NAVBAR========================================-->
    <link rel="stylesheet" type="text/css" href="css/botao_registrar_navbar.css">
    <!--=======================================================API CEP========================================-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <?php
    /*1- realizando a conexao com o banco de dados(local,usuario,
     senha,nomeBanco)*/
    // $con=mysqli_connect("localhost","root","","bd_projeto");
    include "conexao.php";

    /*2- pegando o valor vindo da url */
    $id_exp_anteriores = $_GET["id"];


    /*3- criando o comando sql para selecionar o registro a ser alterado*/
    $comandoSql = "select * from tb_exp_anteriores where id_exp_anteriores='$id_exp_anteriores'";


    /*4- executando o comando sql */
    $resultado = mysqli_query($con, $comandoSql);

    /*5- pegando os dados da consulta criada e armazenando em variaveis */
    $dados = mysqli_fetch_assoc($resultado);

    $id_exp_anteriores = $dados["id_exp_anteriores"];
    $cargo_anterior = $dados["cargo_anterior"];
    $uf = $dados["uf"];
    $cidade_empregador_anterior = $dados["cidade_empregador_anterior"];
    $empregador_anterior = $dados["empregador_anterior"];
    $data_admissao = $dados["data_admissao"];
    $data_demissao = $dados["data_demissao"];
    


    ?>
    <!--preenchendo o formulario com dados da consulta -->

   

    <form class="login100-form validate-form" action="altera_experiencias.php" method="POST">
        <div class="align">

            
        <input class="input100" type="hidden" id="id_exp_anteriores" name="id_exp_anteriores" readonly value="<?php echo $id_exp_anteriores ?>">

        <span class="login100-form-title">
                    Nova Experiência
                </span>

                <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o nome do cargo">
                    <input class="input100" type="text" name="cargo_anterior" id="cargo_anterior" placeholder="Cargo" value="<?php echo $cargo_anterior ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Selecione o Estado" >

                    <select id="uf" name="uf" class="input100" value="<?php echo $uf ?>">
                        <option value="Estado">Estado</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>

                    </select>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite uma cidade">
                    <input class="input100" type="text" name="cidade_empregador_anterior" id="cidade_empregador_anterior" placeholder="Cidade" value="<?php echo $cidade_empregador_anterior ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite o empregador!">
                    <input class="input100" type="text" name="empregador_anterior" id="empregador_anterior" placeholder="Empregador" value="<?php echo $empregador_anterior ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Selecione a data de admissão!">
                    <input class="input100" type="text" name="data_admissao" id="data_admissao" placeholder="Data de Admissão"
                        onclick="(this.type='date')" value="<?php echo $data_admissao ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Selecione a data de demissão!">
                    <input class="input100" type="text" name="data_demissao" id="data_demissao" placeholder="Data de Demissão"
                        onclick="(this.type='date')" value="<?php echo $data_demissao ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                


                <div class="container-login100-form-btn">
                    <input type="submit"  class="login100-form-btn" value="Cadastrar">



                </div>


    </form>


    </div>

    <script src="js/olho_senha.js" type="text/javascript"> </script>
</body>

</html>