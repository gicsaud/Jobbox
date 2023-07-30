<?php 
session_start();
include "conexao.php";
    if(isset($_POST['email_candidato']) && isset($_POST['senha_candidato'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email_candidato']);
        $senha = validate($_POST['senha_candidato']);


        if (empty($email)) {
            header("Location: telaloginCandidato.php?erro=Email é inválido");
            exit();
        }else if(empty($senha)){
            header("Location: telaloginCandidato.php?erro=Senha é inválido");
            exit();
        }else{
            $sql = "SELECT * FROM tb_candidato WHERE email_candidato='$email' AND senha_candidato='$senha'";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) == 1){
                $linha = mysqli_fetch_assoc($result);

                if ($linha['email_candidato'] == $email && $linha['senha_candidato'] == $senha) {
                    $_SESSION['email_candidato'] = $linha['email_candidato'];
                    $_SESSION['nome_candidato'] = $linha['nome_candidato'];
                    $_SESSION['id_candidato'] = $linha['id_candidato'];

                    header("Location: PaginaInicial_logadoCandidato.php");
                    exit();
                }else{
                    header("Location: telaloginCandidato.php?erro=Nome ou senha inválidos");
                    exit();
                }


            }else{
                header("Location: telaloginCandidato.php?erro=Nome ou senha inválidos");
                exit();
            }
        }


    }else{
        header("Location: telaloginCandidato.php");
        exit();
    }
?>