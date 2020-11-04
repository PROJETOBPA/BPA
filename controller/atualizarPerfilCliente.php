<?php

    include_once("../db/connection.php");
    session_start();

    $id = mysqli_real_escape_string($conn, $_SESSION['idusuario']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $query = "UPDATE usuario 
    SET nome = '$nome', email = '$email' WHERE idusuario = '$id' ";

    if(!mysqli_query($conn, $query)){
        die("$query <br> Falha na Execução da Query"
        ."<br>".mysqli_errno($conn)
        ." -> ".mysqli_error($conn)
        );
        mysqli_close($conn);
        

    }else{
        $_SESSION['obg'] = "Deu certo a Inserção! ";

        mysqli_close($conn);
    }
    header('location:../../bpa-main/view/cliente/perfil.php');

?>