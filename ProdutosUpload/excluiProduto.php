<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Exclusão de Produto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
  </head>
<body>
   <div class="container">
     <?php
	   include "conexao.php";
	   
	   //pegando o id do produto a ser excluido
	   $id=$_GET["id"];
	   
	   //pasta onde estão as imagens de upload
	   $pastaArquivos='backupImagens/';
	   
	   $comandoSql1="select * from tb_produto where id_produto=$id";
	   $resultado1=mysqli_query($con,$comandoSql1);
	   $dados=mysqli_fetch_assoc($resultado1);
	   $i=$dados["imagem"];
	   
	   //echo $i;
	   
	   $comandoSql2="delete from tb_produto where id_produto=$id";
	   $resultado2=mysqli_query($con,$comandoSql2);
	   if($resultado2){
		  //excluindo a imagem da pasta de imagens
          unlink($pastaArquivos.$i);
          header ("Location:listaProduto.php");		  
	  }
	 
   
     ?>
   </div>
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!--JQuery, Popper e Bootstrap.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>






</body>
</html>