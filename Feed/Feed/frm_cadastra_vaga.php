<!DOCTYPE html>
<html lang="en">

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



    <div class="limiter">
        <div class="container-login100">

            
            <form class="login100-form validate-form" action="cadastra_vaga.php" method="POST">
                <span class="login100-form-title">
                    Nova vaga
                </span>

                <div class="wrap-input100 validate-input" data-validate="Digite o nome da sua empresa">
                    <input class="input100" type="text" name="nome_empresa" id="nome_empresa" placeholder="Nome da empresa">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o nome do cargo">
                    <input class="input100" type="text" name="cargo_vaga" id="cargo_vaga" placeholder="Cargo">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

              
                <div class="wrap-input100 validate-input" data-validate="Digite o salário!">
                    <input class="input100" type="text" name="salario_vaga" id="salario_vaga" placeholder="Salário">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite a carga horária!">
                    <input class="input100" type="text" name="carga_horaria" id="carga_horaria" placeholder="Carga horária">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite os requisitos da vaga!">
                    <input class="input100" type="text" name="requisitos_vaga" id="requisitos_vaga" placeholder="Requisitos"
                       >
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Digite a quantidade de vagas!">
                    <input class="input100" type="text" name="quantidade_vaga" id="quantidade_vaga" placeholder="Quantidade de vagas"
                       >
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
    </div>
    </div>




    <!--===============================================================================================-->

      
    <script src="../js/modo_escuro.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="js/entrar.js"></script>



</body>

</html>