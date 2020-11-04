<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Busca de Profissional Autônomos</title>
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../css/user/redirecionarUser.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="../../index.php">Busca de Profissionais Autonômos</a></h1>
      <a href="../../view/login/login.php" class="get-started-btn scrollto">Login</a>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Olá, usuário BPA!</h1>
          <h2>Como deseja efetuar seu Cadastro?</h2>
          <div class="d-flex">
            <a href="../../view/register/cadastroCliente.php" class="btn-get-started scrollto">Cliente</a>
            <a href="../../view/register/cadastroProfissional.php" class="btn" >Profissional</i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="../../img/Business deal.gif" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BPA</span></strong>. Reservado
      </div>
    </div>
  </footer>

  <script src="../../assets/js/main.js"></script>

</body>

</html>