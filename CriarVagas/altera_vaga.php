<?php
  /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
   //$con=mysqli_connect("localhost","root","","bd_projeto");
   include "conexao.php";
  
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  $id = $_POST["id_vaga"];
  $salario_vaga = $_POST["salario_vaga"];
  $carga_horaria = $_POST["carga_horaria"];
  $requisitos_vaga = $_POST["requisitos_vaga"];
  $cargo_vaga = $_POST["cargo_vaga"];
  $quantidade_vaga = $_POST["quantidade_vaga"];
  $nome_empresa = $_POST["nome_empresa"];
  
            
 

  /*3- criando o comando sql para alteracao do registro */
  $comandoSql="update  tb_vaga set
  salario_vaga='$salario_vaga',carga_horaria='$carga_horaria',requisitos_vaga='$requisitos_vaga',cargo_vaga ='$cargo_vaga ',quantidade_vaga='$quantidade_vaga',nome_empresa='$nome_empresa'
  where id_vaga='$id'"; 

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	header ("Location:index.php");
  }else{
    echo "Erro na alteração";
  }

