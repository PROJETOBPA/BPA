<?php

    //Conexão para concluir o cadastro
    include_once("../db/connection.php");
    session_start();

    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $servicos = mysqli_real_escape_string($conn, $_POST['servicos']);
    $categoria= mysqli_real_escape_string($conn, $_POST['categoria']);

    $query = "INSERT INTO usuario(nome, email, senha, telefone, servico, categoria, tipo)
                VALUES('$nome', '$email', '$senha',  '$telefone','$servicos',  '$categoria', 1)";


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
header('location:../view/login/login.php');
?>