<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Listagem de Produtos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 

  </head>

  <body>
  <?php
      include "menu.php";

    ?>
   <div class="container">
     <h2> Listagem de Produtos </h2>
    <table class="table table-striped">
       <tr> 
          <td> Id </td>
          <td> Descrição </td>
          <td> Imagem </td>
          <td> Editar </td>
          <td> Excluir </td>
      </tr>
      <?php
        include "conexao.php";

        //pasta onde estao as imagens de upload
        $pastaArquivos='backupImagens/';

        //definindo o comando sql a ser usado */
        $comandoSql="select * from tb_produto";

        //executando o comando sql */
         $resultado=mysqli_query($con,$comandoSql);

        //pegando os dados armazenados e montar a tabela
        while($dados=mysqli_fetch_assoc($resultado)){
          $id=$dados["id_produto"];
          $d=$dados["descricao"];
          $i=$dados["imagem"];

          echo "<tr>
                  <td> $id </td>
                  <td> $d  </td>
                  <td> <img src='$pastaArquivos$i' width='50' height='50'> </td>
                  <td> <a href=alteraProduto.php?id=$id> Editar </td>
                   <td> <a href=excluiProduto.php?id=$id> Excluir </a>  </td> 
                </tr>";
        }
    ?>
   </table>
  </div>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--JQuery, Popper e Bootstrap.min.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



  </body>
  </html>
    