<?php session_start(); 
  $con = mysqli_connect('localhost', 'root', '', 'bd_jobbox') or die ('Não foi possivel conectar');

?> 

<!doctype html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
   
    <link rel="icon" href="../../../../favicon.ico">
  
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">


    <link rel="stylesheet" type="text/css" href="./css/util.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    
    





   
<!--===============================================================================================-->  


<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>.</title>

 
    
  </head>
  <body>
 
  <?php include '../Login_v1/NavBar1.php'; ?>
       
  
  

 <br>
  <br>
 

    <div class="container-login100">
    
        <div class="login100-pic js-tilt" data-tilt>
        <a href="PaginaInicial.php">  <img src="images/logosjdnv.png" alt="IMG" ></a>

        </div>

        

        <form action="loginCandidato.php" method="POST">
          <span class="login100-form-title">
            Login
          </span>
          <span class="badge badge-danger" >Faça login antes de continuar</a>
          <?php
          if (isset($_GET['erro'])){ ?>
            <p class="erro"><?php echo $_GET['erro']; ?></p>
         <?php } ?>
          
          
          <div class="wrap-input100 validate-input" data-validate = "Insira um email válido">
            <input class="input100" type="email" name="email_candidato" id="email_candidato" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Senha necessária">
            <input class="input100" type="password" name="senha_candidato" id="senha_candidato" placeholder="Senha">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" name="botaoLogar" id="botaoLogar" > ENTRAR </button>
            
              
          </div>

          <div class="text-center p-t-12">
          
            <a class="txt2" href="#">
              Esqueceu a senha?
            </a>
          </div>

          <div class="text-center p-t-12">
            <a class="txt2" href="candidato/frm_cadastra_candidato.php">
              Não tem uma conta? Cadastre-se
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
</main>

      </div>
       
      <?php
        if (isset($_POST['botaoLogar'])){
          $email = $_POST['email_candidato'];
          $senha = $_POST['senha_candidato'];

          $comandoSql = mysqli_query($con, "SELECT * FROM tb_candidato WHERE email_candidato = '$email' and senha_candidato = '$senha' ");
          $linha = mysqli_fetch_array($comandoSql);

          if(is_array($linha)){
            $_SESSION["email_candidato"] = $linha ['email_candidato'];
            $_SESSION["senha_candidato"] = $linha ['senha_candidato'];
          }else{
            echo '<script type = "text/javascript">';
            echo 'alert("Nome ou senha inválidos");';
            echo 'window.location.href = "telaloginCandidato.php"';
            echo '</script>';
          }
        }
        if(isset($_SESSION["email_candidato"])){
            header("Location: loginCandidato.php");
        }
      ?>

  
      <label for="input-dark-mode">
   <a class="button">Modo dark</a>
</label>
<input type="checkbox" id="input-dark-mode">
    
  
  
  
  <script src="./js/modo_escuro.js"></script>
 




  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="js/scripts.js" type="text/javascript"> </script>
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>


  </body>
</html>