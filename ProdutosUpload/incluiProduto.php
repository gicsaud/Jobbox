<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cadastro de Produto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
 
 
    <?php
   
    include "menu.php";

 
      //verificando se o botao cadastrar foi clicado
      if(isset($_POST["cadastrar"])){
       // echo "foi clicado no cadastrar";
      	if(($_FILES["arquivo"]["name"]!="")&&($_POST["descricao"])!=""){
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
        	$descricao = $_POST["descricao"];
        	include "conexao.php";

        	//criando o comando sql para inserir o produto
        	$comandoSql="insert into tb_produto(descricao,imagem) 
        	             values('".$descricao."','".$nomeArquivo."')";
            //realizando a inclusao
        	$resultado=mysqli_query($con,$comandoSql);

        	if($resultado){
        	//	echo "Produto cadastrado com sucesso";
            header("Location:listaPerfil.php");
        	}
        }



        }else{
        	echo "nao tem arquivo e descricao";
        }

      }
	
   
    ?>
 
 <div class="container">
        <div class="col-md-6 offset-md-3">
          <h3> Cadastro de Produto </h3> 
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
		<!-- quando o objeto do tipo file (input type=file) é utilizado, se faz necessário usar a codificação
         multipart/form-data no atributo enctype da criação do formulario -->
        
       
        <div class="form-group">
         <div class="col-md-6 offset-md-3">
           <label> Descrição</label>
           <input type="text" id="descricao" name="descricao" class="form-control" value="" >
         </div>
      </div>
	  <br>
	  
	   <div class="form-group">
         <div class="col-md-6 offset-md-3">
           <label for="formFile" class="form-label"> Imagem</label>
	       <input class="form-control" type="file" name="arquivo" id="arquivo">
	     </div>
	  </div>
	  <br>
	  <div class="form-group">
         <div class="col-md-6 offset-md-3">
           <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar" >

         </div>
    </div>

</form>
</div>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--JQuery, Popper e Bootstrap.min.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
  
 </body>
 </html>