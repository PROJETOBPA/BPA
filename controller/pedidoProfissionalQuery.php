<?php

session_start();
include_once("../db/connection.php");

$iddemanda = $_REQUEST['iddemanda'];
$idusuario = mysqli_real_escape_string($conn, $_SESSION['idusuario']);

$query_cadastro = "UPDATE profissional 
                   SET status = 1, idusuario = $idusuario
                   WHERE iddemanda = $iddemanda";

if(!mysqli_query($conn, $query_cadastro)){
    die("$query_cadastro <br> Falha na Execução da Query"
    ."<br>".mysqli_errno($conn)
    ." -> ".mysqli_error($conn)
    );
    mysqli_close($conn);
    
}else{
    echo 'Deu certo a Inserção!';

    mysqli_close($conn);
}
header('location:../view/profissional/pedido.php');
?>