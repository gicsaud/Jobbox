<!doctype html>
<html>

  <head>
  <meta charset="UTF-8">
    
  <link rel="icon" href="../../../../favicon.ico">

    <meta charset="utf-8">
    <link href="../css/darkmode.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="css/modal.css">
 
 <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">



    <title>...</title>

 
    
  </head>
  <body>
    
  <?php include 'NavBar2.php'; ?>
<br>
<br>
<br>
<br>



<?php

//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";


/*2- criando o comando sql para consulta  do registros*/
$comandoSql = "select * from tb_vaga";


/*3- executando o comando sql */
$resultado = mysqli_query($con, $comandoSql);

/*4- pegando os dados da consulta criada e exibindo */
while ($dados = mysqli_fetch_assoc($resultado)) {
    $id_vaga = $dados["id_vaga"];
    $salario_vaga = $dados["salario_vaga"];
    $carga_horaria = $dados["carga_horaria"];
    $requisitos_vaga = $dados["requisitos_vaga"];
    $cargo_vaga = $dados["cargo_vaga"];
    $quantidade_vaga = $dados["quantidade_vaga"];
    $nome_empresa = $dados["nome_empresa"];
    
  
    
    echo "<div class=courses-container>";
    echo "<div class=course>";
    echo "<div class=course-preview>";
    echo "<h6>$nome_empresa</h6>";
    echo "<h2>$cargo_vaga</h2>";
    
    echo "</div>";
    echo "<div class=course-info>";
    echo "<div class=progress-container>";
    
    echo "</div>";
    echo "<h6> Salario da Vaga: R$ $salario_vaga</h6>";
    
    echo "<h6> Carga horária (h/s): $carga_horaria</h6>";
    echo "<h6> Requisitos: $requisitos_vaga</h6>";
    echo "<h6> Quantidade: $quantidade_vaga</h6>";
    echo "<br>";
    echo "<br>";
    echo "<br><a class=excluir href=exclui_vaga.php?id=$id_vaga> Excluir </a>";
    
   ?>

  <br><br><a class=btn href=#altera_vaga_modal> Alterar </a>
   <div id=altera_vaga_modal class=modal>";
 <button><a href=#fechar title=Fechar class=fechar> X </a> </button>



    <div class="limiter">
    <div class="container-login100">

    <form class="login100-form validate-form" action="altera_vaga.php" method="POST">
        


            
        <input class="input100" type="hidden" id="id_vaga" name="id_vaga" readonly value="<?php echo $id_vaga ?>">

        <span class="login100-form-title">
                    Alterar Vaga
                </span>

                <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o nome da empresa !">
                    <input class="input100" type="text" name="nome_empresa" id="nome_empresa" placeholder="Nome empresa" value="<?php echo $nome_empresa ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o salário !">
                    <input class="input100" type="text" name="salario_vaga" id="salario_vaga" placeholder="Salario" value="<?php echo $salario_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

              
                <div class="wrap-input100 validate-input" data-validate="Digite a carga horária !">
                    <input class="input100" type="text" name="carga_horaria" id="carga_horaria" placeholder="Carga horária" value="<?php echo $carga_horaria?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite os requisitos !">
                    <input class="input100" type="text" name="requisitos_vaga" id="requisitos_vaga" placeholder="Requisitos" value="<?php echo $requisitos_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div> <div class="wrap-input100 validate-input" data-validate="Digite o cargo !">
                    <input class="input100" type="text" name="cargo_vaga" id="cargo_vaga" placeholder="Cargo" value="<?php echo $cargo_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite a quantidade de vagas!">
                    <input class="input100" type="text" name="quantidade_vaga" id="quantidade_vaga" placeholder="Quantidade" value="<?php echo $quantidade_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                


                <div class="container-login100-form-btn">
                    <input type="submit"  class="login100-form-btn" value="Alterar">



                </div>

    </form>

  
 </div>

    <?php
    
   
    echo "</div>";
    echo "</div>";
    echo "</div>";
    
    echo "</div>";
    echo "<br>";
    
    echo "<br><br>";
}
  ?>


   




    





<a href="#abrirModal" class="button_plus"> </a>

  <div id="abrirModal" class="modal">
  
  <script src="../js/modo_escuro.js"></script>

<button><a href="#fechar" title="Fechar" class="fechar"> X </a> </button>

<?php include 'frm_cadastra_vaga.php'; ?>

 </div>
                
               



    <script src="../js/jsNAVBAR.js"></script>
   
  </body>
</html>
