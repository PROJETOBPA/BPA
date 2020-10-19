<?PHP
session_start();
?>

<!DOCTYPE html>
<html lang=pt-br>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>BPA - Busca de Profissionais Autônomos</title>
</head>

<body>
    <div class="container">

        <header>

            <div class="wave1"></div>

            <div class="inform-topo">
                <h1>Encontre profissionais confiavéis de acordo com a sua nessecidade no Busca de Profissionais
                    Autônomos - BPA.
                </h1>
            </div>

        </header>

        <div class="corpo">

            <div class="esquerda">
                <div class="descr-sit">
                    <p> Profissionais que querem divulgar seus serviços e<br>
                        também para clientes que procuram por profissionais!
                    </p>
                </div>

                <div class="esquerda-button">

                    <div class="login">
                        <a href="./view/login/login.php">Login</a>
                    </div>

                    <div class="cadastrar">

                        <a href="../bpa/view/user/bot-redire-usuario.php">Cadastrar</a>

                    </div>

                </div>
            </div>

            <div class="centro">
                <div class="img-center">
                    <img src="img/Job hunt.gif">
                </div>
            </div>

            <div class="direita">
                <div class="img-busc">
                    <img src="img/People search-amico.svg">
                </div>
            </div>
        </div>

        <div class="footer"></div>
    </div>
</body>

</html>
