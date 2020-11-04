<?php

$servidor = "localhost";
$usuario = "root";
$senha = "" ;
$bdnome = "bpa";



    //Conexao com o banco
    $conn = mysqli_connect($servidor, $usuario, $senha, $bdnome);

    //Se a conexao funcionou
    if(!$conn){
        die("Falha na Conexão: " . mysqli_connect_errno() . " -> " . mysqli_connect_error());
    }else{
        // echo("CONECTOU!!!");
    }
?>