<?php
  /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
   //$con=mysqli_connect("localhost","root","","bd_projeto");
   include "conexao.php";
  
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
            $id=$_POST["id_exp_anteriores"];
            $cargo_anterior=$_POST["cargo_anterior"];
            $uf=$_POST["uf"];
            $cidade_empregador_anterior=$_POST["cidade_empregador_anterior"];
            $empregador_anterior=$_POST["empregador_anterior"];
            $data_admissao=$_POST["data_admissao"];
            $data_demissao=$_POST["data_demissao"];
            
 

  /*3- criando o comando sql para alteracao do registro */
  $comandoSql="update  tb_exp_anteriores set
  cargo_anterior='$cargo_anterior',uf='$uf',cidade_empregador_anterior='$cidade_empregador_anterior',empregador_anterior='$empregador_anterior',data_admissao='$data_admissao',data_demissao='$data_demissao'
  where id_exp_anteriores='$id'"; 

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	echo "Alterado com sucesso";
  }else{
    echo "Erro na alteração";
  }

