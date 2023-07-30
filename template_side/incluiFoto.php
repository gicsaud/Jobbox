<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../navs_forms/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./main_foto.css">
  <link rel="stylesheet" href="./checkmode.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="./css/preloader.css">
  </head>
<body>
 
 
    <?php
   
  include '../navs_forms/navNew.php'; 

 
      //verificando se o botao cadastrar foi clicado
      if(isset($_POST["cadastrar"])){
       // echo "foi clicado no cadastrar";
      	if(($_FILES["arquivo"]["name"]!="")!=""){
        //echo "tem arquivo e descricao";
      	
      	//definindo uma pasta para os arquivos de upload
      	$pastaArquivos='backupImagens/';

      	//coletando o nome e o nome temporario da imagem selecionada
      	$nomeArquivo=$_FILES["arquivo"]["name"];
      	$nomeTemporario=$_FILES["arquivo"]["tmp_name"];

      	//$tamanho=$_FILES["arquivo"]["size"];

      	//echo "nome do arquivo $nomeArquivo";
        //echo "<br> nome temporario $nomeTemporario";
      	//echo "<br> tamanho do arquivo $tamanho";
        
        //tentando copiar o temporario para a pasta de arquivos backupImagens 
        if(move_uploaded_file($nomeTemporario,$pastaArquivos.$nomeArquivo)){
        	
        	include "conexao.php";

        	//criando o comando sql para inserir o produto
        	$comandoSql="insert into tb_foto_perfil_candidato(imagem_candidato) 
        	             values('".$nomeArquivo."')";
            //realizando a inclusao
        	$resultado=mysqli_query($con,$comandoSql);

        	if($resultado){
        	//	echo "Produto cadastrado com sucesso";
            
            echo '<script type = "text/javascript">';
          echo 'window.location.href = "../telaloginCandidato2.php"';
          echo '</script>';
        	}
        }



        }else{
        	echo "nao tem arquivo e descricao";
        }

      }
	
   
    ?>
 <div class="limiter">
        <div class="container-login100">
 <div class="container">
        <div class="col-md-6 offset-md-3">
        <span class="login100-form-title"> Foto de Perfil </span> 
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
		<!-- quando o objeto do tipo file (input type=file) é utilizado, se faz necessário usar a codificação
         multipart/form-data no atributo enctype da criação do formulario -->
        
       
       
	  
	   <div class="form-group">
         <div class="col-md-6 offset-md-3">
           <label for="formFile" class="form-label" style="color:#9d3fd1;"> Adicione sua foto de perfil</label>
	       <input class="form-control" type="file" name="arquivo" id="arquivo">
	     </div>
	  </div>
	  <br>
	  <div class="container-login100-form-btn">
                    <input type="submit" id="cadastrar" name="cadastrar" class="login100-form-btn" value="Cadastrar">



                </div>
    </div>
    </div>
    </div>
</form>
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

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--JQuery, Popper e Bootstrap.min.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
  <script src="../navs_forms/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <script src="./checkmode.js"></script>
  
 </body>
 </html>