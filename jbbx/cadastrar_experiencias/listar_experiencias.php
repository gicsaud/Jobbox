<!DOCTYPE HTML>
<html lang="en">
    <head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/card.css">
        <link rel="stylesheet" type="text/css" href="darkmode.css">
        <link rel="stylesheet" type="text/css" href="css/botao_registrar_navbar.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
    </head>
    <body>
<?php

//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";

/*2- criando o comando sql para consulta  do registros*/
$comandoSql = "select * from tb_exp_anteriores";


/*3- executando o comando sql */
$resultado = mysqli_query($con, $comandoSql);

/*4- pegando os dados da consulta criada e exibindo */
while ($dados = mysqli_fetch_assoc($resultado)) {
    $id = $dados["id_exp_anteriores"];
    $cargo_anterior = $dados["cargo_anterior"];
    $uf = $dados["uf"];
    $cidade_empregador_anterior = $dados["cidade_empregador_anterior"];
    $empregador_anterior = $dados["empregador_anterior"];
    $data_admissao = $dados["data_admissao"];
    $data_demissao = $dados["data_demissao"];

     $admissaoFormatada=date_create($data_admissao);
    $admissaoFormatada=date_format($admissaoFormatada, 'd-m-Y');
    $demissaoFormatada=date_create($data_demissao);
    $demissaoFormatada=date_format($demissaoFormatada, 'd-m-Y');
    
    echo "<div class=courses-container>";
    echo "<div class=course>";
    echo "<div class=course-preview>";
    echo "<h6>Experiências Anteriores</h6>";
    echo "<h2>$cargo_anterior</h2>";
    
    echo "</div>";
    echo "<div class=course-info>";
    echo "<div class=progress-container>";
    
    echo "</div>";
    echo "<h6>-> Empregador Anterior: $empregador_anterior</h6>";
    
    echo "<h6>-> Cidade: $cidade_empregador_anterior / $uf</h6>";
    echo "<h6>-> Data de Admissão: $admissaoFormatada</h6>";
    echo "<h6>-> Data de Demiissão: $demissaoFormatada</h6>";
    echo "<br>";
    echo "<br>";
    echo "<br><a class=excluir href=exclui_experiencias.php?id=$id> Excluir </a>";
    echo "<br><br><a class=btn href=frm_altera_exp.php?id=$id> Alterar </a>";
    //echo "<a class=btn href=#>Candidate-se</a>";
    echo "</div>";
    
    echo "</div>";
    
    echo "</div>";
    echo "<br>";
    echo "<br>";


   
    
    //echo "cargo anterior: $cargo_anterior <br>";
    //echo "uf: $uf <br>";
   // echo "cidade empregador anterior: $cidade_empregador_anterior <br>";
   // echo "empregador_anterior: $empregador_anterior <br>";
    //echo "data_admissao: $data_admissao <br>";
    //echo "data_demissao: $data_demissao <br>";
    



    

    echo "<br><br>";
}

?>
</div>
    </body>
   
</html>