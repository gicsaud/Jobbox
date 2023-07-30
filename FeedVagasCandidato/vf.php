<?php
    $conexao2 = new PDO('mysql:host=localhost;dbname=bd_jobbox',"root","");
    $buscaUser = $conexao2->prepare("SELECT * FROM usuarios WHERE cod_empresa=? and cod_candidato=?
    and status='0' ");
    $buscaUser->bindParam(1,$_POST['ir']);
    $buscaUser->bindParam(2,$_POST['ip']);
    $buscaUser->execute();
    $fetch = $buscaUser->fetchAll();
    $contaUsuarios = count($fetch);

    $buscaUserUnf = $conexao2->prepare("SELECT * FROM usuarios WHERE cod_empresa=? and cod_candidato=?
    and status='1' ");
    $buscaUserUnf->bindParam(1,$_POST['ip']);
    $buscaUserUnf->bindParam(2,$_POST['ir']);
    $buscaUserUnf->execute();
    $fetchUnf = $buscaUserUnf->fetchAll();
    $contaUsuariosUnf = count($fetchUnf);

    if($contaUsuarios <= 1){
        
        $statusNovo = $conexao2->prepare("UPDATE usuarios SET status='1' WHERE cod_empresa=? and cod_candidato=?");
        $statusNovo->bindParam(1,$_POST['ir']);
        $statusNovo->bindParam(2,$_POST['ip']);
        $statusNovo->execute();

        if($statusNovo->rowCount() >=1){
            echo "<a class='btn' id='assinar'  > Desistir</a>";
        }else{
            $statusNovoUnf = $conexao2->prepare("UPDATE usuarios SET status='0'");
            $buscaUserUnf->bindParam(1,$_POST['ip']);
            $buscaUserUnf->bindParam(2,$_POST['ir']);
           
            $statusNovoUnf->execute();
    
            if($statusNovoUnf->rowCount() >=1){
                echo "<a class='btn' id='assinar'  > Candidatou-se </a>";
            }else{
                echo "Houve um erro";
            }
            }/*else*/
            
        }/*else*/
        

       
    
        
    

?>