<?php
   /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
  //$con=mysqli_connect("localhost","root","","bd_projeto");
  include "conexao.php";

  /*2- pegando o valor vindo da url */
  $id_vaga=$_GET["id"];
  

   /*3- criando o comando sql para exclusao  do registros*/
  $comandoSql="delete from tb_vaga where id_vaga='$id_vaga'";


    /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
    header ("Location:index.php");
  }else{
    echo "Erro na exclusao";

  }


?>