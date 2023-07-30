<?php
    $conexao2 = new PDO('mysql:host=localhost;dbname=bd_jobbox',"root","");
    $buscaUser2 = $conexao2->prepare("SELECT * FROM usuarios WHERE cod_empresa=? and cod_candidato=?
    and status='0' ");
    $buscaUser2->bindParam(1,$_POST['ip']);
    $buscaUser2->bindParam(2,$_POST['ir']);
    
    $buscaUser2->execute();
    $fetch2 = $buscaUser2->fetchAll();
    $contaUsuarios2 = count($fetch2);

    

    if($contaUsuarios2 <= 1){
        echo "Não tem usuarios";
    }else{
        $statusNovo2 = $conexao2->prepare("UPDATE usuarios SET status='0' WHERE cod_empresa=? and cod_candidato=?");
        $statusNovo2->bindParam(1,$_POST['ip']);
        $statusNovo2->bindParam(2,$_POST['ir']);
        
        $statusNovo2->execute();

        if($statusNovo2->rowCount() >=1){
            echo "<a class=btn> Seguindo </a>";
        }else{
            echo "Houve um erro";
        }
        }/*else*/
        

        
    

?>