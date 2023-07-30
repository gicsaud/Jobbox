<!doctype html>
<html>


<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <link rel="icon" href="../../../../favicon.ico">

<meta charset="utf-8">
<link href="../css/darkmode.css" rel="stylesheet">
<link href="css/navbar.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/util.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">


<link rel="stylesheet" href="css/card.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">



<title>...</title>
    
    
</head>

<body>
 
<?php include 'Navbar2.php'; ?>


    <?php
    include "conexao.php";

    $id_vaga = $_GET["id"];


    $comandoSql = "select * from tb_vaga where id_vaga='$id_vaga'";


    $resultado = mysqli_query($con, $comandoSql);

    $dados = mysqli_fetch_assoc($resultado);

    $id_vaga = $dados["id_vaga"];
    $salario_vaga = $dados["salario_vaga"];
    $nome_empresa = $dados["nome_empresa"];
    $carga_horaria = $dados["carga_horaria"];
    $requisitos_vaga = $dados["requisitos_vaga"];
    $cargo_vaga = $dados["cargo_vaga"];
    $quantidade_vaga = $dados["quantidade_vaga"];
  
    


    ?>

    <div class="limiter">
    <div class="container-login100">

    <form class="login100-form validate-form" action="altera_vaga.php" method="POST">
        


            
        <input class="input100" type="hidden" id="id_vaga" name="id_vaga" readonly value="<?php echo $id_vaga ?>">

        <span class="login100-form-title">
                    Alterar Vaga
                </span>

                <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o nome da empresa !">
                    <input class="input100" type="text" name="salario_vaga" id="salario_vaga" placeholder="Salario" value="<?php echo $nome_empresa ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o salário !">
                    <input class="input100" type="text" name="salario_vaga" id="salario_vaga" placeholder="Nome empresa" value="<?php echo $salario_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

              
                <div class="wrap-input100 validate-input" data-validate="Digite a carga horária !">
                    <input class="input100" type="text" name="carga_horaria" id="carga_horaria" placeholder="Carga horária" value="<?php echo $carga_horaria?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite os requisitos !">
                    <input class="input100" type="text" name="requisitos_vaga" id="requisitos_vaga" placeholder="Requisitos" value="<?php echo $requisitos_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div> <div class="wrap-input100 validate-input" data-validate="Digite o cargo !">
                    <input class="input100" type="text" name="cargo_vaga" id="cargo_vaga" placeholder="Cargo" value="<?php echo $cargo_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite a quantidade de vagas!">
                    <input class="input100" type="text" name="quantidade_vaga" id="quantidade_vaga" placeholder="Quantidade" value="<?php echo $quantidade_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                


                <div class="container-login100-form-btn">
                    <input type="submit"  class="login100-form-btn" value="Cadastrar">



                </div>

    </form>


    </div>
    </div>


    <script src="../js/modo_escuro.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="js/entrar.js"></script>


</body>

</html>