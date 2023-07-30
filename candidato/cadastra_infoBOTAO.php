<?php
include "conexao.php";

            
            $a=$_POST["nome_instituicao"];
            $b=$_POST["nivel_formacao"];
            $d=$_POST["data_inicio"];
            $f=$_POST["data_termino"];
            $c=$_POST["nome_curso"];

  $comandoSql="INSERT INTO tb_form_prof
  (nome_instituicao, nivel_formacao, data_inicio, data_termino, nome_curso) 
  VALUES 
  ('$a', '$b', '$d', '$f', '$c')";

$resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
    echo '<script type = "text/javascript">';
    echo 'window.location.href = "../template_side/index.php"';
    echo '</script>';
  
}else{
  echo "Erro no cadastro";

}
echo "<br> <a href='listar_candidato.php'>Listar Candidatos</a>";
?>