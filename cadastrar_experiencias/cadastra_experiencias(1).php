<?php
include "conexao.php";

            $n=$_POST["cargo_anterior"];
            $i=$_POST["uf"];
            $r=$_POST["cidade_empregador_anterior"];
            $c=$_POST["empregador_anterior"];
            $e=$_POST["data_admissao"];
            $u=$_POST["data_demissao"];
            
  $comandoSql="INSERT INTO tb_exp_anteriores
  (cargo_anterior,uf,cidade_empregador_anterior,empregador_anterior,data_admissao,data_demissao)
  VALUES 
  ('$n','$i','$r','$c','$e','$u')";

$resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
    echo "Cadastrado com sucesso";
  
}else{
  echo "Erro no cadastro";

}
echo "<br> <a href='listar_experiencias.php'>Listar Candidatos</a>";
?>