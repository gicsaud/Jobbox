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
	<link rel="stylesheet" href="../navs_forms/style.css">
	
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
	<link rel="stylesheet" href="./css/checkmode.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="./css/preloader.css">

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
				$("#rua_candidato").val("");
				$("#bairro_candidato").val("");

			}

			//Quando o campo cep perde o foco.
			$("#cep_candidato").blur(function () {

				//Nova variável "cep" somente com dígitos.
				var cep = $(this).val().replace(/\D/g, '');

				//Verifica se campo cep possui valor informado.
				if (cep != "") {

					//Expressão regular para validar o CEP.
					var validacep = /^[0-9]{8}$/;

					//Valida o formato do CEP.
					if (validacep.test(cep)) {

						//Preenche os campos com "..." enquanto consulta webservice.
						$("#rua_candidato").val("...");
						$("#bairro_candidato").val("...");


						//Consulta o webservice viacep.com.br/
						$.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

							if (!("erro" in dados)) {
								//Atualiza os campos com os valores da consulta.
								$("#rua_candidato").val(dados.logradouro);
								$("#bairro_candidato").val(dados.bairro);

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
			


				<form class="login100-form validate-form" action="cadastra_candidato.php" method="POST">
					

					<div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite seu nome completo">
						<input class="input100" type="text" id="nome_candidato" name="nome_candidato"
							placeholder="Nome">
						<span class="focus-input100 "></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite sua data de nascimento: dd/mm/aaaa">
						<input class="input100" type="text" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimento"
                        onclick="(this.type='date')">
						
						<span class="focus-input100"></span>
						

						</span>
					</div>
					
					<div class="wrap-input100 validate-input"
						data-validate="Digite o seu cpf: XXXXXXXX-XX">
						<input class="input100" type="text" id="cpf_candidato" name="cpf_candidato"
							placeholder="CPF">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						</span>
					</div>
					<div class="wrap-input100 validate-input"
						data-validate="Digite o seu telefone: (XX)XXXXXXXXX">
						<input class="input100" type="text" id="telefone_candidato" name="telefone_candidato"
							placeholder="Telefone
							">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Digite um e-mail válido: ex@abc.xyz">
						<input class="input100" type="email" id="email_candidato" name="email_candidato" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite uma senha">

						<input class="input100" type="password" id="senha_candidato" name="senha_candidato"
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
						<input type="submit"  class="login100-form-btn" value="Confirmar">



					</div>

					

					<div class="text-center p-t-12">
						<a class="txt2-2 " href="../tipo_cadastro.php">
							Entrar com outra conta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				


				
					


					

					<div class="wrap-input101 validate-input" data-validate="Digite seu CEP">
						<input class="borda input103" type="text" id="cep_candidato" name="cep_candidato" placeholder="CEP">
						<span class="focus-input103"></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="wrap-input101 validate-input" data-validate="Insira sua rua">
						<input class="input102" type="text" id="rua_candidato" name="rua_candidato" placeholder="Rua">
						<span class="focus-input102"></span>
						<span class="symbol-input100">

						</span>
					</div>
					<div class="wrap-input101 validate-input" data-validate="Insira seu bairro">
						<input class="input102" type="text" id="bairro_candidato" name="bairro_candidato"
							placeholder="Bairro">
						<span class="focus-input102"></span>
						<span class="symbol-input100">

						</span>
					</div>
					<div class="wrap-input101 validate-input" data-validate="Insira o número de sua residência">
						<input class="input102" type="text" id="num_candidato" name="num_candidato" placeholder="Número">
						<span class="focus-input102"></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="wrap-input101 validate-input " data-validate="Insira o complemento: CASA, APTO X">
						<input class="input102" type="text" id="complemento_candidato" name="complemento_candidato"
							placeholder="Complemento">
						<span class="focus-input102"></span>
						<span class="symbol-input100">

						</span>
					</div>
						
					<div class="wrap-input101 validate-input" data-validate="Tipo de CNH">

<select id="categoria_cnh" name="categoria_cnh" class="input100">
<option value="Não possuo">Categoria de CNH</option>
    <option value="Não possuo">Não possuo</option>
    <option value="ACC">Categoria ACC	</option>
    <option value="A">Categoria A</option>
    <option value="B">Categoria B</option>
	<option value="C">Categoria C</option>
    <option value="D">Categoria D</option>
    <option value="E">Categoria E</option>
	<option value="A e ACC">Categoria A e ACC</option>
	<option value="A e B">Categoria A e B</option>
    <option value="A e C">Categoria A e C</option>
    <option value="A e D">Categoria A e D</option>
    <option value="A e E">Categoria A e E</option>
    
    

</select>
<span class="focus-input100"></span>

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