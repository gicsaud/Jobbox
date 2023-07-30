<?php 
session_start();
$error = array();

require "mail.php";

include "conexao.php";
$con=mysqli_connect("localhost","root","","bd_jobbox");

	$mode = "enter_email";
	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];

	}

	if(count($_POST) > 0){

		switch ($mode) {
			case 'enter_email':
				# code...
				$email = $_POST['email_candidato'];
				//validate email
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$error[] = "Por Favor, digite um email válido";
				}elseif(!valid_email($email)){
					$error[] = "Este e-mail não existe!";
				}else{
				$_SESSION['forgot']['email_candidato'] = $email;
				send_email($email);
				
				header("Location: ./enviar_email.php?mode=enter_code");
				die;
				}
				break;
			case 'enter_code':
					# code...
					$code = $_POST['code'];
					$result = is_code_correct($code);

					if($result == "O código é correto"){

						$_SESSION['forgot']['code'] = $code;

					header("Location: ./enviar_email.php?mode=enter_password");
					die;
					}else{
						$error[] = $result;
					}
				break;

			case 'enter_password':
						# code...
						$password = $_POST['senha_candidato'];
						$password2 = $_POST['senha_candidato2'];
						
						if($password !== $password2){
							$error[] = "As senhas não correspondem!";
						}elseif(!isset($_SESSION['forgot']['email_candidato']) || !isset($_SESSION['forgot']['code'])){
							header("Location: ./enviar_email.php");
							die;
						}else{
							
							
							save_password($password);
							if(isset($_SESSION['forgot'])){
								unset($_SESSION['forgot']);
							}
							
							header("Location: ../telaloginCandidato.php");
							die;
						}
						
				break;
			
			default:
				# code...
				break;
		}
	}

	


	function send_email($email){
		$con=mysqli_connect("localhost","root","","bd_jobbox");
		$expire = time() + (60 * 1);
		$code = rand(1000,99999);
		$email = addslashes($email);


		$query = "insert into codes (email_candidato,code,expire) value ('$email','$code','$expire')";
		mysqli_query($con,$query);

		//enviando o email aq
		send_mail($email,'Codigo de alteracao de senha',"Olá, aqui é da equipe Jobbox, seu código para alteração de senha é " . $code);
	}
	function save_password($password){
		$con=mysqli_connect("localhost","root","","bd_jobbox");
		
		//$password = password_hash($password, PASSWORD_DEFAULT);
		$email = addslashes($_SESSION['forgot']['email_candidato']);


		$query = "update tb_candidato set senha_candidato = '$password' where email_candidato = '$email' limit 1";
		mysqli_query($con,$query);

		//enviando o email aq
		//mail($email,'JOBBOX: Redefinir Senha', 'Seu código é ' . $code);
	}
	function valid_email($email){
		$con=mysqli_connect("localhost","root","","bd_jobbox");
		
		
		$email = addslashes($email);


		$query = "select * from tb_candidato where email_candidato = '$email' limit 1";
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0){
				
				

				return "O código é correto";
				}else{
					return true;
				}
			

		}
		return false;
		//enviando o email aq
		//mail($email,'JOBBOX: Redefinir Senha', 'Seu código é ' . $code);
	}
	function is_code_correct($code){
		$con=mysqli_connect("localhost","root","","bd_jobbox");
		$code = addslashes($code);
		$expire = time();
		$email = addsLashes($_SESSION['forgot']['email_candidato']);

		$query = "select * from codes where code = '$code' && email_candidato = '$email' order by id desc limit 1";
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_assoc($result);
				if($row['expire'] > $expire){

				return "O código é correto";
				}else{
					return "O código está expirado";
				}
			}else{
					return "O código está incorreto";
			
			}
		}
		return "O código está incorreto";
	}
?>

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
	<link rel="stylesheet" type="text/css" href="css/main_enviarmail.css">
	<link rel="stylesheet" type="text/css" href="./navs_sendmail_candidato/style.css">
	<!--=======================================================DARKMODE========================================-->
	<link rel="stylesheet" type="text/css" href="darkmode.css">
	<link rel="stylesheet" type="text/css" href="./css/checkmode.css">
	<link rel="stylesheet" type="text/css" href="./css/preloader.css">
	<!--=======================================================BOTAO REGISTRAR NAVBAR========================================-->
	
</head>

<body>
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
	<?php 
		include "./navs_sendmail_candidato/navNew.php";
	?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a href="../PaginaInicial.php"><img src="images/img-01.png" alt="IMG"></a>
				</div>
				<?php
					switch ($mode) {
						case 'enter_email':
							?>
							<form method="post" action="enviar_email.php?mode=enter_email"  class="login100-form validate-form"> 
							<span class="login100-form-title">
								Trocar senha
							</span>
							<div class="text-center p-t-12">
						<span class="txt1">
							Digite o e-mail da sua conta.
						</span>
						<br>
						<a class="txt2" href="#">
							Enviaremos uma confirmação.
						</a>
					</div>
					<br>
							
							
							<?php 
								foreach ($error as $err) {
									# code...
									echo $err . "<br>";
								}
							?>
							</span>
							
							<div class="wrap-input100">
							<input class="input100" type="email" name="email_candidato" placeholder="Email">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
							</div>
							<div class="container-login100-form-btn">
							<input type="submit" class="login100-form-btn" value="Enviar">
							<br><br><br>
							<div><a href="../telaloginCandidato.php" class="login100-form-btn">Voltar ao Login</a></div>
							</div>
						</form>
				<?php
					
					
							break;
						case 'enter_code':
								# code...
								?>
							<form method="post" action="enviar_email.php?mode=enter_code" class="login100-form validate-form"> 
							<span class="login100-form-title">
								Trocar senha
							</span>
							<div class="text-center p-t-12">
							<span class="txt1">
							Digite o código de confirmação.
							</span>
							<br>
							<a class="txt2">
							Enviaremos uma confirmação.
							</a>
							</div>
							<br>
							<?php 
								foreach ($error as $err) {
									# code...
									echo $err . "<br>";
								}
							?>
							</span>
							<div class="wrap-input100">
							<input class="input100" type="text" name="code" placeholder="Ex: 12345"><br>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
							
							</span>
							</div>
							<div class="container-login100-form-btn">
							<input type="submit" value="Confirmar" class="login100-form-btn">
							<br><br><br>
							<a href="enviar_email.php">
								<input type="button" value="Voltar ao início"  class="login100-form-btn">
							</a>
							<br><br>
							<div>
						</form>
				<?php
							break;
						case 'enter_password':
							
									# code...
									?>
									<form method="post" action="enviar_email.php?mode=enter_password" class="login100-form validate-form"> 
									<span class="login100-form-title">
									Trocar senha
									</span>
									<div class="text-center p-t-12">
									<span class="txt1">
									Digite sua nova senha
									</span>
									<br>
									
									</div>
									<br>
							<?php 
								foreach ($error as $err) {
									# code...
									echo $err . "<br>";
								}
							?>
							</span>
							<div class="wrap-input100">
							<input  class="input100" type="text" name="senha_candidato" placeholder="Nova senha"><br>
							<input  class="input100" type="text" name="senha_candidato2" placeholder="Repita a nova senha"><br>
							</div>

							<div class="container-login100-form-btn">
							<input type="submit" value="Confirmar" class="login100-form-btn">
							<br><br><br>
							<a href="enviar_email.php">
								<input type="button" value="Voltar ao início" class="login100-form-btn">
							</a>
							<br><br>
							
							</div>
						</form>
				<?php
							break;
						
						default:
							# code...
							break;
					}
					?>
					<style>
						  .settings-option{
							
                			position: relative;
							margin-top: 600px;
							margin-left: -1130px;
						  }

						</style>
 <div class="footer">
				<label for="toggle" class="theme-toggler settings-option" id="theme-toggler">
  
  <span class="theme-toggler__label">Modo Claro / Modo Escuro</span>
  <input type="checkbox" id="toggle" class="theme-toggler__checkbox" checked
		   />
  <span aria-hidden="true" class="theme-toggler__switch"></span>
				
 </div>
				
				
	<script src="js/main.js"></script>
	<script src="./navs_sendmail_candidato/script.js"></script>

	

	<script  src="./js/preloader.js"></script>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script src="./js/checkmode.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>