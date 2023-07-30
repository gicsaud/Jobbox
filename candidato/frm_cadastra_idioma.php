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
    <link rel="stylesheet" type="text/css" href="./main_info.css">
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

            
            <form class="login100-form validate-form" action="cadastra_idioma.php" method="POST">
                <span class="login100-form-title">
                    Idiomas
                </span>
                <span style="color:#9d3fd1;" >Você poderá cadastrar mais depois</a>

                <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o nome do cargo">
                    <input class="input100" type="text" name="nome_idioma" id="nome_idioma" placeholder="Idioma">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Nível de fluência">

<select id="nivel_fluencia" name="nivel_fluencia" class="input100">
<option value="Básico">Nível de fluência</option>
    <option value="Básico">Básico</option>
    <option value="Intermediário">Intermediário	</option>
    <option value="Avançado">Avançado</option>
    <option value="Nativo">Nativo</option>
	
    
    

</select>
<span class="focus-input100"></span>

</div>

               
             
                


                <div class="container-login100-form-btn">
                    <input type="submit"  class="login100-form-btn" value="Cadastrar">



                </div>

                
            </form>

        </div>
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