<?php
include "conexao.php";

            $n=$_POST["nome_empresa"];
            $i=$_POST["salario_vaga"];
            $r=$_POST["carga_horaria"];
            $c=$_POST["requisitos_vaga"];
            $e=$_POST["cargo_vaga"];
            $u=$_POST["quantidade_vaga"];
            
  $comandoSql="INSERT INTO tb_vaga
 ( `nome_empresa`, `salario_vaga`, `carga_horaria`, `requisitos_vaga`, `cargo_vaga`, `quantidade_vaga`)
  VALUES 
  ('$n','$i','$r','$c','$e','$u')";

$resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
  header ("Location:feed_empresa.php");
  
}else{
  echo "Erro no cadastro";

}
echo "<br> <a href='feed_empresa.php'>Ir para o feed</a>";
?>