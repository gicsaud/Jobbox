
 <?php 
 echo "<h3>  Meu Perfil </h3>";
//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
//$con=mysqli_connect("localhost","root","","bd_projeto");
  include "conexao.php";

/*2- criando o comando sql para consulta  do registros*/
$comandoSql="select * from tb_candidato";


/*3- executando o comando sql */
$resultado=mysqli_query($con,$comandoSql);

/*4- pegando os dados da consulta criada e exibindo */
while($dados=mysqli_fetch_assoc($resultado)){
          $id=$dados["id_candidato"];
          $nome=$dados["nome_candidato"]; 
          $data_nascimento=$dados["data_nascimento"];  
          $cpf=$dados["cpf_candidato"];
          $telefone=$dados["telefone_candidato"];
          $email=$dados["email_candidato"];
          $senha=$dados["senha_candidato"];
          $cep=$dados["cep_candidato"];
          $rua=$dados["rua_candidato"];
          $bairro=$dados["bairro_candidato"];
          $num=$dados["num_candidato"];
          $complemento=$dados["complemento_candidato"];
  
  

  echo "id: $id <br>";
  echo "nome: $nome <br>";
  echo "data nascimento: $data_nascimento <br>";
  echo "cpf: $cpf <br>";
  echo "telefone: $telefone <br>";
  echo "email: $email <br>";
  echo "senha: $senha <br>";
  echo "cep: $cep <br>";
  echo "rua: $rua <br>";
  echo "bairro: $bairro <br>";
  echo "num: $num <br>";
  echo "complemento: $complemento <br>";
  
  
  
  echo "<a href=exclui_candidato.php?id=$id> Excluir </a>";
  echo "<br><a href=frm_altera_candidato.php?id=$id> Alterar </a>";

  echo "<br><br>";


}

?>
</div>