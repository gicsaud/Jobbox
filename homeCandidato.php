<?php
  session_start();

  if (isset($_SESSION['id_candidato']) && isset($_SESSION['email_candidato'])) {
  
?>

<!DOCTYPE html>
<html lang="en">
<head>

  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./erro.css">

  
</head>
<body>
  <h1>Bem vindo de volta! <?php echo $_SESSION['nome_candidato']; ?></h1>
  <a href="sairCandidato.php"> Sair </a>

  
</body>
</html>
<?php
}else{
  header("Location: telaloginCandidato.php");
                  exit();
}
?>