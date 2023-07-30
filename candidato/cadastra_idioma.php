<?php
include "conexao.php";

            
            $a=$_POST["nome_idioma"];
            $b=$_POST["nivel_fluencia"];
            

  $comandoSql="INSERT INTO tb_idioma
  (nome_idioma, nivel_fluencia) 
  VALUES 
  ('$a', '$b')";

$resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
    echo '<script type = "text/javascript">';
    echo 'window.location.href = "../template_side/incluiFoto.php"';
    echo '</script>';
  
}else{
  echo "Erro no cadastro";

}
echo "<br> <a href='listar_candidato.php'>Listar Candidatos</a>";
?>