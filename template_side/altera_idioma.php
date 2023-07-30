<?php
  /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
   //$con=mysqli_connect("localhost","root","","bd_projeto");
   include "conexao.php";
  
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
            
            $id_idioma=$_POST["id_idioma"];
            $nome_idioma=$_POST["nome_idioma"];
            $nivel_fluencia=$_POST["nivel_fluencia"];
            
 

  /*3- criando o comando sql para alteracao do registro */
  $comandoSql="update  tb_idioma set
  nome_idioma='$nome_idioma',nivel_fluencia='$nivel_fluencia'
  where id_idioma='$id_idioma'"; 

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	echo "Alterado com sucesso";
  }else{
    echo "Erro na alteração";
  }

 