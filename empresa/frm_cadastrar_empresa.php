<!DOCTYPE html>
<html lang="en">
<?php include '../navs_forms/navNew.php'; ?>
<head>
	<title>Jobbox</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--FOOTER-->
	<!--===============================================FOOTER================================================-->
	
	<link rel="stylesheet" href="./css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="./css/preloader.css">
	<link rel="stylesheet" href="./css/checkmode.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

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
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="../navs_forms/style.css">
	<!--=======================================================DARKMODE========================================-->
	
	<!--=======================================================BOTAO REGISTRAR NAVBAR========================================-->
	

	<!--=======================================================API CEP========================================-->
	

	<!-- Adicionando JQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- Adicionando Javascript API CEP-->
	<script>

		$(document).ready(function () {

			function limpa_formulário_cep() {
				// Limpa valores do formulário de cep.
				$("#rua_empresa").val("");
				$("#bairro_empresa").val("");

			}

			//Quando o campo cep perde o foco.
			$("#cep_empresa").blur(function () {

				//Nova variável "cep" somente com dígitos.
				var cep = $(this).val().replace(/\D/g, '');

				//Verifica se campo cep possui valor informado.
				if (cep != "") {

					//Expressão regular para validar o CEP.
					var validacep = /^[0-9]{8}$/;

					//Valida o formato do CEP.
					if (validacep.test(cep)) {

						//Preenche os campos com "..." enquanto consulta webservice.
						$("#rua_empresa").val("...");
						$("#bairro_empresa").val("...");


						//Consulta o webservice viacep.com.br/
						$.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

							if (!("erro" in dados)) {
								//Atualiza os campos com os valores da consulta.
								$("#rua_empresa").val(dados.logradouro);
								$("#bairro_empresa").val(dados.bairro);

							} //end if.
							else {
								//CEP pesquisado não foi encontrado.
								limpa_formulário_cep();
								alert("CEP não encontrado.");
							}
						});
					} //end if.
					else {
						//cep é inválido.
						limpa_formulário_cep();
						alert("Formato de CEP inválido.");
					}
				} //end if.
				else {
					//cep sem valor, limpa formulário.
					limpa_formulário_cep();
				}
			});
		});

	</script>

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

	<div class="limiter">

		<div class="container-login100">
			


				<form class="login100-form validate-form" action="salvar_empresa.php" method="POST">
					

					<div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o nome da empresa">
						<input class="input101" type="text" id="nome_empresa" name="nome_empresa"
							placeholder="Nome">
						<span class="focus-input100 "></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite o cnpj da empresa">
						<input class="input100" type="text" id="cnpj_empresa" name="cnpj_empresa" placeholder="CNPJ">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						</span>
					</div>
					<div class="wrap-input100 validate-input"
						data-validate="Digite um número de contato da empresa: (XX)XXXX-XXXX">
						<input class="input100" type="text" id="telefone_empresa" name="telefone_empresa"
							placeholder="Telefone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Digite um e-mail válido: ex@abc.xyz">
						<input class="input100" type="email" id="email_empresa" name="email_empresa" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite uma senha">

						<input class="input100" type="password" id="senha_empresa" name="senha_empresa"
							placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						</span>
					</div>
				
				
					
					<span class="login100-form-title">
						Registre-se
					</span>
					<div class="login100-pic js-tilt" data-tilt>
						<a href="../PaginaInicial.php"><img src="images/img-01.png" alt="IMG"></a>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit"  class="login100-form-btn" value="Cadastrar">



					</div>

					

					<div class="text-center p-t-12">
						<a class="txt2-2 " href="../tipo_cadastro.php">
							Entrar com outra conta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				


				
					


					

					<div class="wrap-input101 validate-input" data-validate="Digite seu CEP">
						<input class="borda input103" type="text" id="cep_empresa" name="cep_empresa" placeholder="CEP">
						<span class="focus-input103"></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="wrap-input101 validate-input" data-validate="Insira sua rua">
						<input class="input102" type="text" id="rua_empresa" name="rua_empresa" placeholder="Rua">
						<span class="focus-input102"></span>
						<span class="symbol-input100">

						</span>
					</div>
					<div class="wrap-input101 validate-input" data-validate="Insira seu bairro">
						<input class="input102" type="text" id="bairro_empresa" name="bairro_empresa"
							placeholder="Bairro">
						<span class="focus-input102"></span>
						<span class="symbol-input100">

						</span>
					</div>
					<div class="wrap-input101 validate-input" data-validate="Insira o número de sua residência">
						<input class="input102" type="text" id="num_empresa" name="num_empresa" placeholder="Número">
						<span class="focus-input102"></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="wrap-input101 validate-input " data-validate="Insira o complemento: CASA, APTO X">
						<input class="input102" type="text" id="complemento_empresa" name="complemento_empresa"
							placeholder="Complemento">
						<span class="focus-input102"></span>
						<span class="symbol-input100">

						</span>
					</div>
						


				</form>
			</div>
			
		</div>
	</div>
	</div>
	</div>

	<!--<div class="container">
		<div class="row">
			<div class="col mt-5">
				<?php
					switch(@$_REQUEST["index"]){
						case "nova-empresa";
							include("cadastrar_empresa.php");
						break;
						case "listar-empresa";
							include("listar_empresa.php");
						break;
						default;
							print "Bem vindos!";
		}
	?>
			</div>
		</div>
	</div>-->
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
	
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="js/entrar.js"></script>
		<script src="../navs_forms/script.js"></script>
		<script src="./js/checkmode.js"></script>
		<script  src="./js/preloader.js"></script>
</body>

</html>