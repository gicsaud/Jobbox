<?php
    $conexao2 = new PDO('mysql:host=localhost;dbname=bd_jobbox',"root","");
    $buscaUser = $conexao2->prepare("SELECT * FROM usuarios WHERE cod_empresa=? and cod_candidato=?
    and status='0' ");
    $buscaUser->bindParam(1,$_POST['ir']);
    $buscaUser->bindParam(2,$_POST['ip']);
    $buscaUser->execute();
    $fetch = $buscaUser->fetchAll();
    $contaUsuarios = count($fetch);

    $buscaUser2 = $conexao2->prepare("SELECT * FROM usuarios WHERE cod_empresa=? and cod_candidato=?
    and status='1' ");
    $buscaUser2->bindParam(1,$_POST['ip']);
    $buscaUser2->bindParam(2,$_POST['ir']);
    
    $buscaUser2->execute();
    $fetch2 = $buscaUser2->fetchAll();
    $contaUsuarios2 = count($fetch2);

    

    if($contaUsuarios <= 0){
        echo "Não tem usuarios";
    }else{
        $statusNovo = $conexao2->prepare("UPDATE usuarios SET status='1' WHERE cod_empresa=? and cod_candidato=?");
        $statusNovo->bindParam(1,$_POST['ir']);
        $statusNovo->bindParam(2,$_POST['ip']);
        $statusNovo->execute();

        if($statusNovo->rowCount() >=1){
            echo "<a class='btn' id='assinar'  > Candidatou-se </a>";
        }else{
            echo "Houve um erro";
        }
        }/*else*/
        if($contaUsuarios <= 0){
            echo "Não tem usuarios";
        }else{
            $statusNovo2 = $conexao2->prepare("UPDATE usuarios SET status='0' WHERE cod_empresa=? and cod_candidato=?");
            $statusNovo2->bindParam(1,$_POST['ip']);
            $statusNovo2->bindParam(2,$_POST['ir']);
            
            $statusNovo2->execute();
    
            if($statusNovo2->rowCount() >=1){
                echo "<a class='btn' id='assinar'  > Candidatar-se </a>";
            }else{
                echo "Houve um erro";
            }
            }/*else*/

        
    

?>