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
    <link rel="stylesheet" type="text/css" href="css/frm_altera_empresa.css">
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
    $id_empresa = $_GET["id"];


    /*3- criando o comando sql para selecionar o registro a ser alterado*/
    $comandoSql = "select * from tb_empresa where id_empresa='$id_empresa'";


    /*4- executando o comando sql */
    $resultado = mysqli_query($con, $comandoSql);

    /*5- pegando os dados da consulta criada e armazenando em variaveis */
    $dados = mysqli_fetch_assoc($resultado);

    $id_empresa=$dados["id_empresa"];
            $nome=$dados["nome_empresa"];
            $cnpj=$dados["cnpj_empresa"];
            $telefone=$dados["telefone_empresa"];
            $email=$dados["email_empresa"];
            $senha=$dados["senha_empresa"];
            $cep=$dados["cep_empresa"];
            $rua=$dados["rua_empresa"];
            $bairro=$dados["bairro_empresa"];
            $num=$dados["num_empresa"];
            $complemento=$dados["complemento_empresa"];


    ?>
    <!--preenchendo o formulario com dados da consulta -->

   

    <form class="login100-form validate-form" action="altera_empresa.php" method="POST">
        <div class="align">

            
        <input class="input100" type="hidden" id="id_empresa" name="id_empresa" readonly value="<?php echo $id_empresa ?>">

            <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite seu nome completo">
                <input class="input100" type="text" name="nome_empresa" id="nome_empresa" placeholder="Nome" value="<?php echo $nome ?>">
                <span class="focus-input100"></span>
                <span class="symbol-input100">

                </span>
            </div>
            

            <div class="wrap-input100 validate-input" data-validate="Digite o seu cpf: XXXXXXXX-XX">
                <input class="input100" type="text" name="cnpj_empresa" id="cnpj_empresa" placeholder="CNPJ"value="<?php echo $cnpj ?>">
                <span class="focus-input100"></span>
                <span class="symbol-input100">

                </span>
            </div>


            <div class="wrap-input100 validate-input" data-validate="Digite um número de contato válido: (XX)XXXX-XXXX">
                <input class="input100" type="text" id="telefone_empresa" name="telefone_empresa" placeholder="Telefone" value="<?php echo $telefone ?>">
                <span class="focus-input100"></span>
                <span class="symbol-input100">

                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Digite um e-mail válido: ex@abc.xyz">
                <input class="input100" type="email" id="email_empresa" name="email_empresa" placeholder="Email" value="<?php echo $email ?>">
                <span class="focus-input100"></span>
                <span class="symbol-input100">

                </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Digite uma senha válida!">

                <input class="input100" type="password" id="senha_empresa" name="senha_empresa" placeholder="Senha" value="<?php echo $senha ?>">
                <span class="focus-input100"></span>
                <span class="symbol-input100">

                </span>
            </div>



            <span class="login100-form-title">
                Editar Perfil
            </span>
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/img-01.png" alt="IMG">
            </div>
            <div class="container-login100-form-btn">
                <input type="submit" class="login100-form-btn" value="Confirmar">



            </div>

            <div class="text-center p-t-12">
                <span class="txt1-2">
                    Esqueceu sua
                </span>
                <a class="txt2-3 " href="#">
                    Senha?
                </a>
            </div>

            <div class="text-center p-t-12">
                <a class="txt2-2 " href="#">
                    Entrar com outra conta
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>








            <div class="wrap-input101 validate-input" data-validate="Digite seu CEP">
                <input class="borda input103" type="text" id="cep_empresa" name="cep_empresa" placeholder="CEP" value="<?php echo $cep ?>">
                <span class="focus-input103"></span>
                <span class="symbol-input100">

                </span>
            </div>

            <div class="wrap-input101 validate-input" data-validate="Insira sua rua">
                <input class="input102" type="text" id="rua_empresa" name="rua_empresa" placeholder="Rua" value="<?php echo $rua ?>">
                <span class="focus-input102"></span>
                <span class="symbol-input100">

                </span>
            </div>
            <div class="wrap-input101 validate-input" data-validate="Insira seu bairro">
                <input class="input102" type="text" id="bairro_empresa" name="bairro_empresa" placeholder="Bairro" value="<?php echo $bairro ?>">
                <span class="focus-input102"></span>
                <span class="symbol-input100">

                </span>
            </div>
            <div class="wrap-input101 validate-input" data-validate="Insira o número de sua residência">
                <input class="input102" type="text" id="num_empresa" name="num_empresa" placeholder="Número" value="<?php echo $num ?>">
                <span class="focus-input102"></span>
                <span class="symbol-input100">

                </span>
            </div>

            <div class="wrap-input101 validate-input " data-validate="Insira o complemento: CASA, APTO X">
                <input class="input102" type="text" id="complemento_empresa" name="complemento_empresa" placeholder="Complemento" value="<?php echo $complemento ?>">
                <span class="focus-input102"></span>
                <span class="symbol-input100">

                </span>
            </div>
        </div>

    </form>


    </div>
</body>

</html>