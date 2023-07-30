<?php include '../navs_forms/navNew.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FOOTER-->
    <!--===============================================FOOTER================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./css/style_footer.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--=================================================FORMS==============================================-->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="../navs_forms/style.css">
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
    <link rel="stylesheet" type="text/css" href="../template_side/main.css">
    <link rel="stylesheet" href="./css/checkmode.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="./css/preloader.css">
   
    <!--=======================================================DARKMODE========================================-->
    
    <!--=======================================================BOTAO REGISTRAR NAVBAR========================================-->
    

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    
    
</head>

<body>
   


<div class="limiter">
        <div class="container-login100">

            
            <form class="login100-form validate-form" action="cadastra_experiencias.php" method="POST">
                <span class="login104-form-title">
                    Nova Experiência<br>(Cadastre mais depois)
                </span>
                
                <div class="wrap-input108 validate-input" data-validate="Nome inválido: Digite o nome do cargo">
                    <input class="input108" type="text" name="cargo_anterior" id="cargo_anterior" placeholder="Cargo">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

                <div class="wrap-input108 validate-input" data-validate="Selecione o Estado">

                    <select id="uf" name="uf" class="input107">
                        <option value="SP">Estado</option>
                        <option value="SP">AC</option>
                        <option value="SP">AL</option>
                        <option value="SP">AP</option>
                        <option value="SP">AM</option>
                        <option value="SP">BA</option>
                        <option value="SP">CE</option>
                        <option value="SP">DF</option>
                        <option value="SP">ES</option>
                        <option value="SP">GO</option>
                        <option value="SP">MA</option>
                        <option value="SP">MT</option>
                        <option value="SP">MS</option>
                        <option value="SP">MG</option>
                        <option value="SP">PA</option>
                        <option value="PB">PB</option>
                        <option value="PB">PR</option>
                        <option value="PB">PE</option>
                        <option value="PB">PI</option>
                        <option value="PB">RJ</option>
                        <option value="PB">RN</option>
                        <option value="PB">RS</option>
                        <option value="PB">RO</option>
                        <option value="PB">RR</option>
                        <option value="PB">SC</option>
                        <option value="SP">SP</option>
                        <option value="PB">SE</option>
                        <option value="RJ">TO</option>

                    </select>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input108 validate-input" data-validate="Digite uma cidade">
                    <input class="input107" type="text" name="cidade_empregador_anterior" id="cidade_empregador_anterior" placeholder="Cidade">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input108 validate-input" data-validate="Digite o empregador!">
                    <input class="input107" type="text" name="empregador_anterior" id="empregador_anterior" placeholder="Empregador">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input108 validate-input" data-validate="Selecione a data de admissão!">
                    <input class="input107" type="text" name="data_admissao" id="data_admissao" placeholder="Data de Admissão"
                        onclick="(this.type='date')">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input108 validate-input" data-validate="Selecione a data de demissão!">
                    <input class="input107" type="text" name="data_demissao" id="data_demissao" placeholder="Data de Demissão"
                        onclick="(this.type='date')">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                


                <div class="container-login100-form-btn">
                    <input type="submit"  class="login104-form-btn" value="Próximo">



                </div>

                
            </form>
            
    </div>
    </div>
    </div>

    <label for="toggle" class="theme-toggler settings-option" id="theme-toggler">
  
  <span class="theme-toggler__label">Modo Claro / Modo Escuro</span>
  <input type="checkbox" id="toggle" class="theme-toggler__checkbox" checked
           />
  <span aria-hidden="true" class="theme-toggler__switch"></span>
  
 
 
 
     
     <script src="vendor/tilt/tilt.jquery.min.js"></script>
     <script >
     $('.js-tilt').tilt({
       scale: 1.1
     })
   </script>



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="js/entrar.js"></script>
    <script src="../navs_forms/script.js"></script>
    <script src="./js/checkmode.js"></script>

</body>

</html>