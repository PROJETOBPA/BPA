<?php
    $iddemanda = $_GET["iddemanda"];

    include_once('../db/connection.php');
    $query = "DELETE FROM demanda WHERE iddemanda = $iddemanda";

    $resposta = mysqli_query($conn,$query);

    if($resposta){
        echo("OK");
        header("location:../../bpa-main/view/cliente/pendencia.php");
    }else{
        echo("ERRO: ".mysqli_errno($conn)."<br>".mysqli_error($conn));
    }
    
    mysqli_close($conn);

?>