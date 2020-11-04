<?php
 session_start();

    //conexao bd
    include_once('../db/connection.php');

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    printf("<p>Email:" . $email . "</p>");
    printf("<p>Senha:" . $senha . "</p>");

    
    $query = "UPDATE usuario SET senha='$senha' WHERE email='$email'";

    mysqli_query($conn, $query);
    
    header('location:../view/login/login.php');

    $conn->close();

?>

