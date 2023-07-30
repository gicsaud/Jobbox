<?php
    $conexao2 = new PDO('mysql:host=localhost;dbname=bd_jobbox',"root","");
    $buscaUser = $conexao2->prepare("SELECT * FROM usuarios WHERE cod_empresa=? and cod_candidato=?
    and status='0' ");
    $buscaUser->bindParam(1,$_POST['ir']);
    $buscaUser->bindParam(2,$_POST['ip']);
    $buscaUser->execute();
    $fetch = $buscaUser->fetchAll();
    $contaUsuarios = count($fetch);

    

    if($contaUsuarios <= 0){
        echo "Não tem usuarios";
    }else{
        $statusNovo = $conexao2->prepare("UPDATE usuarios SET status='1' WHERE cod_empresa=? and cod_candidato=?");
        $statusNovo->bindParam(1,$_POST['ir']);
        $statusNovo->bindParam(2,$_POST['ip']);
        $statusNovo->execute();

        if($statusNovo->rowCount() >=1){
            echo "<a class=btn> Seguindo </a>";
        }else{
            echo "Houve um erro";
        }
        }/*else*/
        

        
    

?>