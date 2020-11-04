<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/register/cadastroCliente.css">
    <title>Cadastro Cliente</title>
</head>

<body>
    <div class="container">

            <!--Título-->
            <div class="desc-text">
                <h1>Realialize seu Cadastro para Fazer Pedidos!</h1>
            </div>

        <!--Imagem-->
        <div class="card-center">

            <div class="img-center-cad">
                <img src="../../img/Authentication-rafiki.png">
            </div>

            <!--Form para cadastrar o usuário-->
            <form action="../../controller/cadastroClienteQuery.php" method="post">

                <div class="titulo">
                    <h2>Preencha os Campos com seus dados para Concluir seu cadastro!</h2>
                </div>

                <div class="Cadastro-Cliente">

                    <label for="nome"></label>
                    <input type="text" placeholder="Nome" name="nome" id="nome" required>

                    <label for="email"></label>
                    <input type="email" placeholder="Email" name="email" id="email" required>

                    <label for="senha"></label>
                    <input type="password" placeholder="Senha" name="senha" id="senha" required>

                    <div class="button-concluir">
                        <input type="submit" class="btn" value="Concluir">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if(isset($_SESSION['obg'])){
        echo($_SESSION['obg']);
        unset($_SESSION['obg']);
    }
    ?>
</body>

</html>