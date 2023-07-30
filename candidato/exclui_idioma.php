<?php
   /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
  //$con=mysqli_connect("localhost","root","","bd_projeto");
  include "conexao.php";

  /*2- pegando o valor vindo da url */
  $id_idioma=$_GET["id"];
  

   /*3- criando o comando sql para exclusao  do registros*/
  $comandoSql="delete from tb_idioma where id_idioma='$id_idioma'";


    /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
    echo '<script type = "text/javascript">';
    echo 'window.location.href = "../template_side/index.php"';
    echo '</script>';
  }else{
    echo "Erro na exclusao";

  }


?>