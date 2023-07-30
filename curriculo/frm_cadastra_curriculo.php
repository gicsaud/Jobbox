<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Cadastro de vagas </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=================================================FORMS==============================================-->
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    

</head>

<body>
    <?php 
    include "conexao.php"; 
    $comandoCandidato = "select * from tb_candidato";
    $resultado = mysqli_query($con, $comandoCandidato);
    $dados=mysqli_fetch_assoc($resultado);
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


          $data_nascimentoFormatada=date_create($data_nascimento);
          $data_nascimentoFormatada=date_format($data_nascimentoFormatada, 'd-m-Y');
    ?>
   

         
    <form action="cadastra_curriculo.php" method="POST">
    <!-- partial:index.partial.html -->
    <?php 
    echo "<div class='row dashboard-cards'>";
    echo "<div class='card col-md-4'>";
    echo "<div class='card-title'>";
    echo "<h2>";
    echo "Nome";
    echo "<small>$nome</small>";
    echo "</h2>";
    echo "<div class='task-count'>";
    echo "<img src='./imagens/perfil.png'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  
    echo "<div class='card col-md-4'>";
    echo "<div class='card-title'>";
    echo "<h2>";
    echo "Data de Nascimento";
    echo "<small>$data_nascimentoFormatada</small>";
    echo "</h2>";
    echo "<div class='task-count'>";
    echo "<img src='./imagens/perfil.png'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='card col-md-4'>";
    echo "<div class='card-title'>";
    echo "<h2>";
    echo "CPF";
    echo "<small>$cpf</small>";
    echo "</h2>";
    echo "<div class='task-count'>";
    echo "<img src='./imagens/perfil.png'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='card col-md-4'>";
    echo "<div class='card-title'>";
    echo "<h2>";
    echo "E-mail";
    echo "<small>$email</small>";
    echo "</h2>";
    echo "<div class='task-count'>";
    echo "<img src='./imagens/perfil.png'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='card col-md-4'>";
    echo "<div class='card-title'>";
    echo "<h2>";
    echo "Telefone";
    echo "<small>$telefone</small>";
    echo "</h2>";
    echo "<div class='task-count'>";
    echo "<img src='./imagens/perfil.png'>";
    echo "</div>";
    echo "</div>";
    
    echo "</div>";

    echo "<div class='row dashboard-cards'>";
    echo "<div class='card col-md-4'>";
    echo "<div class='card-title'>";
    echo "<h2>";
    echo "CEP";
    echo "<small>$cep</small>";
    echo "</h2>";
    echo "<div class='task-count'>";
    echo "<img src='./imagens/perfil.png'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  
    echo "<div class='card col-md-4'>";
    echo "<div class='card-title'>";
    echo "<h2>";
    echo "Rua";
    echo "<small>$rua</small>";
    echo "</h2>";
    echo "<div class='task-count'>";
    echo "<img src='./imagens/perfil.png'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='card col-md-4'>";
    echo "<div class='card-title'>";
    echo "<h2>";
    echo "Bairro";
    echo "<small>$bairro</small>";
    echo "</h2>";
    echo "<div class='task-count'>";
    echo "<img src='./imagens/perfil.png'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
   
    echo "<div class='card col-md-4'>";
    echo "<div class='card-title'>";
    echo "<h2>";
    echo "Complemento";
    echo "<small>$complemento</small>";
    echo "</h2>";
    echo "<div class='task-count'>";
    echo "<img src='./imagens/perfil.png'>";
    echo "</div>";
    echo "</div>";
    
    echo "</div>";
  ?>
 <?php 
    $comandoExp="select * from tb_exp_anteriores";
    $resultado = mysqli_query($con, $comandoExp);
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

        echo "<div class='card col-md-4'>";
        echo "<div class='card-title'>";
        echo "<h2>";
        echo "Experiencia anterior";
        echo "<small>Cargo anterior: $cargo_anterior </small>";
        echo "</h2>";
        echo "<div class='task-count'>";
        echo "<img src='./imagens/perfil.png'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='card-flap flap1'>";
        echo "<div class='card-description'>";
        echo "<ul class='task-list'>";
        echo " <li>";
        echo "Empregador anterior: $empregador_anterior";
        
        echo "</li>";
        echo "<li>";
        echo "Cidade de trabalho da experiência anterior: $cidade_empregador_anterior";
        echo "</li>";
        echo "<li>";
        echo "Estado de trabalho da experiência anterior: $uf";
        echo "</li>";
        echo "<li>";
        echo "Data de admissão da experiência anterior: $admissaoFormatada";
        echo "</li>";
        echo "<li>";
        echo "Data de demissão da experiência anterior: $demissaoFormatada";
        echo "</li>";
        echo "</ul>";
        echo "</div>";
        echo "<div class='card-flap flap2'>";
        echo "<div class='card-actions'>";
        echo "<a class='btn' href='#'>Close</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }

 ?>
  
  

    

            
  
    

            
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="./js/script.js"></script>

    <script src="./js/jsNAVBAR.js"></script>
    
</body>
</html>