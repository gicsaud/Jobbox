<!doctype html>
<html>
  <head>

    <meta charset="utf-8">

          <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>

    <link rel="stylesheet" type="text/css" href="css/darkmode.css">
      <link href="css/navbar.css" rel="stylesheet">
      
   
<!--===============================================================================================-->  

<!--===============================================================================================-->

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


    <title>Template de navbars, usando Bootstrap.</title>

    <!-- Principal CSS do Bootstrap -->
	
    <!--  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->


    <!-- Estilos customizados para esse template -->
 
    
  </head>
  <body>
  	 

      
      
  <?php include 'NavBar1.php'; ?>
 <br>
  <br>
 
<div class="limiter">
    <div class="container-login100">
    
        <div class="login100-pic js-tilt" data-tilt>
        <a href="PaginaInicial.php">  <img src="images/logosjdnv.png" alt="IMG" ></a>

        </div>

        <form class="login100-form validate-form">
          <span class="login100-form-title">
           Com qual tipo de conta deseja entrar?
          </span>
          
        
           		
			 <a href="telaloginEmpresa.php"> <input type="button" value="Empresa" class="login100-form-btn">
             </a>
          <br>
         
           <a href="telaloginCandidato.php"> <input type="button" value="Candidato" class="login100-form-btn"></a>
    
        
        </form>
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

 
  <br>
  <br>
    <div id="container">
      <label class="switch" for="input-dark-mode">
        <input type="checkbox" id="input-dark-mode">
        <span class="slider"></span>
      </label>
    </div>


  
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="./js/modo_escuro.js"></script>

  </body>
</html>
