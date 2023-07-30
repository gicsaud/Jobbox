<?php 
session_start();
include "conexao.php";
    if(isset($_POST['email_empresa']) && isset($_POST['senha_empresa'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email_empresa']);
        $senha = validate($_POST['senha_empresa']);


        if (empty($email)) {
            header("Location: telaloginEmpresa.php?erro=Email é inválido");
            exit();
        }else if(empty($senha)){
            header("Location: telaloginEmpresa.php?erro=Senha é inválido");
            exit();
        }else{
            $sql = "SELECT * FROM tb_empresa WHERE email_empresa='$email' AND senha_empresa='$senha'";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) == 1){
                $linha = mysqli_fetch_assoc($result);

                if ($linha['email_empresa'] == $email && $linha['senha_empresa'] == $senha) {
                    $_SESSION['email_empresa'] = $linha['email_empresa'];
                    $_SESSION['nome_empresa'] = $linha['nome_empresa'];
                    $_SESSION['id_empresa'] = $linha['id_empresa'];

                    header("Location: PaginaInicial_logadoEmpresa.php");
                    exit();
                }else{
                    header("Location: telaloginEmpresa.php?erro=Nome ou senha inválidos");
                    exit();
                }


            }else{
                header("Location: telaloginEmpresa.php?erro=Nome ou senha inválidos");
                exit();
            }
        }


    }else{
        header("Location: telaloginEmpresa.php");
        exit();
    }
?>