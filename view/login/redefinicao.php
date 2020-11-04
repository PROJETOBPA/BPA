<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../../css/login/redefinir.css">
      <title>Document</title>
    </head>

  <body>


    <input type="checkbox" id="check">

    <header>

      <div class="left_area">
        <h3><span>"Busca de Profissionais Autonômos"</span></h3>
      </div>

      <div class="right_area">
        <a href="../../index.php" class="logout_btn">Sair</a>
      </div>

    </header>

    <div class="mobile_nav">

      <div class="nav_bar">
        <img src="../../img/avatar.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>

    </div>

    <div class="content">

      <div class="card">
	    <div class="container-contact100">

		  <div class="wrap-contact100">
			  <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="contact100-form-title-1">
           Redefinição de Senha
          </span>

          <span class="contact100-form-title-2">
            Insira seu E-mail e sua Nova Senha!
          </span>
			  </div>

			  <form action="../../controller/redefinirQuery.php" method="POST" class="contact100-form validate-form">
  
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">E-mail:</span>
            <input type="email" name="email" placeholder="E-mail" maxlength="80" id="email">
          </div>

          <div class="wrap-input100 validate-input" data-validate="Phone is required">
            <span class="label-input100">Senha:</span>
            <input type="senha" name="senha" placeholder="Senha" id="senha">
          </div>

          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
                <input type="submit" value="Alterar" class="Alterar">
            </button>
          </div>
			  </form>
		  </div>
	  </div>
  </body>
</html>
