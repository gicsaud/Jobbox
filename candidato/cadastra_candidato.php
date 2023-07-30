<?php
include "conexao.php";

            $n=$_POST["nome_candidato"];
            $i=$_POST["data_nascimento"];
            $r=$_POST["cpf_candidato"];
            $c=$_POST["telefone_candidato"];
            $e=$_POST["email_candidato"];
            $u=$_POST["senha_candidato"];
            $j=$_POST["cep_candidato"];
            $t=$_POST["rua_candidato"];
            $q=$_POST["bairro_candidato"];
            $p=$_POST["num_candidato"];
            $k=$_POST["complemento_candidato"];
            $a=$_POST["categoria_cnh"];
            
  $comandoSql="INSERT INTO tb_candidato
  (nome_candidato,data_nascimento,cpf_candidato,telefone_candidato,email_candidato, senha_candidato, cep_candidato, rua_candidato, bairro_candidato, num_candidato, complemento_candidato, categoria_cnh) 
  VALUES 
  ('$n','$i','$r','$c','$e','$u', '$j', '$t', '$q', '$p', '$k', '$a')";

$resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
    echo '<script type = "text/javascript">';
    echo 'window.location.href = "frm_cadastra_exp.php"';
    echo '</script>';
  
}else{
  echo "Erro no cadastro";

}
echo "<br> <a href='listar_candidato.php'>Listar Candidatos</a>";
?>