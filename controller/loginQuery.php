<?php
 session_start();

    //conexao bd
    include_once('../db/connection.php');

    $email = mysqli_real_escape_string($conn, $_POST["email"]); 
    $senha = mysqli_real_escape_string($conn, $_POST["senha"]);

    // query para o banco
    $query = "SELECT * FROM usuario WHERE email = '$email' and senha = $senha";

    $result = mysqli_query($conn, $query);

    // checagem do numero de linhas retornadas
    if(mysqli_num_rows($result) > 0){
    // Leitura da resposta da Execução
    $retornoDoSelect = mysqli_fetch_array($result);
    // print_r($retornoDoSelect);
    echo("idusuario = ".$retornoDoSelect['idusuario']);
    echo("<br>email = ".$retornoDoSelect['email']);
    echo("<br>senha = ".$retornoDoSelect['senha']);

    $_SESSION['idusuario'] = $retornoDoSelect['idusuario'];
    $_SESSION['email'] = $retornoDoSelect['email'];
    $_SESSION['senha'] = $retornoDoSelect['senha'];

    $tipo = $retornoDoSelect['tipo'];
    
    If ($tipo == 1){
        header('location:../../bpa-main/view/profissional/dashboard.php');
    }else {
        header('location:../../bpa-main/view/cliente/dashboard.php');
    }

}else{
    $_SESSION["erro"] = "<br>Usuário ou senha inválidos<br>";
    // header("location:../index.php");
}

    // fecha a conexão com BD
    mysqli_close($conn);

?>