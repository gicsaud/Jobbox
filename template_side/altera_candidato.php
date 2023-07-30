<?php
  /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
   //$con=mysqli_connect("localhost","root","","bd_projeto");
   include "conexao.php";
  
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
            
            $id=$_POST["id_candidato"];
            $nome=$_POST["nome_candidato"];
            $data_nascimento=$_POST["data_nascimento"];
            $cpf=$_POST["cpf_candidato"];
            $telefone=$_POST["telefone_candidato"];
            $email=$_POST["email_candidato"];
            $senha=$_POST["senha_candidato"];
            $cep=$_POST["cep_candidato"];
            $rua=$_POST["rua_candidato"];
            $bairro=$_POST["bairro_candidato"];
            $num=$_POST["num_candidato"];
            $complemento=$_POST["complemento_candidato"];
            $cnh=$_POST["categoria_cnh"];

  /*3- criando o comando sql para alteracao do registro */
  $comandoSql="update  tb_candidato set
  nome_candidato='$nome',data_nascimento='$data_nascimento',cpf_candidato='$cpf',telefone_candidato='$telefone',email_candidato='$email',senha_candidato='$senha',cep_candidato='$cep',rua_candidato='$rua',bairro_candidato='$bairro',num_candidato='$num',complemento_candidato='$complemento', categoria_cnh='$cnh'
  where id_candidato='$id'"; 

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
    header ("Location:index.php");
  }else{
    echo "Erro na alteração";
  }

