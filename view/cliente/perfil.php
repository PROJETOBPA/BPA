<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script type = "text/javascript" src="../../js/editarPerfilCliente.js"></script> 
    <link rel="stylesheet" href="../../css/cliente/perfil.css">
  </head>


  <input type="checkbox" id="check">

<header>

    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>

    <div class="left_area">
        <h3><span>"Perfil"</span></h3>
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

    <div class="mobile_nav_items">
            <a href="../../view/cliente/dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="../../view/cliente/perfil.php"><i class="fas fa-cogs"></i><span>Perfil</span></a>
            <a href="../../view/cliente/demanda.php"><i class="fas fa-table"></i><span>Demanda</span></a>
            <a href="../../view/cliente/candidato.php"><i class="fas fa-table"></i><span>Lista de Candidatos</span></a>
            <a href="../../view/cliente/pendencia.php"><i class="fas fa-table"></i><span>Pendências</span></a>
            <a href="../../view/user/sobrenos.php"><i class="fas fa-info-circle"></i><span>Sobre</span></a>
            <a href="../../view/user/config.php"><i class="fas fa-sliders-h"></i><span>Configuração</span></a>
        </div>
    </div>

    </div>

    <div class="sidebar">

      <div class="profile_info">
          <img src="../../img/avatar.jpg" class="profile_image" alt="">
        </div>

            <a href="../../view/cliente/dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="../../view/cliente/perfil.php"><i class="fas fa-cogs"></i><span>Perfil</span></a>
            <a href="../../view/cliente/demanda.php"><i class="fas fa-table"></i><span>Demanda</span></a>
            <a href="../../view/cliente/candidato.php"><i class="fas fa-table"></i><span>Lista de Candidatos</span></a>
            <a href="../../view/cliente/pendencia.php"><i class="fas fa-table"></i><span>Pendências</span></a>
            <a href="../../view/user/sobrenos.php"><i class="fas fa-info-circle"></i><span>Sobre</span></a>
            <a href="../../view/user/config.php"><i class="fas fa-sliders-h"></i><span>Configuração</span></a>
        </div>
        </div>
      </div>

      <div class="content">
        <div class="card">
        <?php
        include_once("../../db/connection.php");
        session_start();

        $idusuario = mysqli_real_escape_string($conn, $_SESSION['idusuario']);
        $query_select = "SELECT * FROM usuario WHERE idusuario = $idusuario ";
        $result = mysqli_query($conn, $query_select);

        $retornoDoSelect = mysqli_fetch_array($result);

        $nome = mysqli_real_escape_string($conn, $retornoDoSelect['nome']);
        $email = mysqli_real_escape_string($conn, $retornoDoSelect['email']);
        $categoria = mysqli_real_escape_string($conn, $retornoDoSelect['categoria']);
        $servico = mysqli_real_escape_string($conn, $retornoDoSelect['servico']);

        echo "<h1>Alterar Informações Pessoais<br>".$nome."!</h1>" ;
        echo "<div id='dados'>";
          echo "<form action='../../controller/atualizaPerfilCliente.php' method='POST'>";
            echo "<span style='font-weight:bold'>Nome: </span><br>
            <input type='text' id='nome' name='nome' value='".$nome . "' disabled><br>";
            echo "<span style='font-weight:bold'>E-mail: </span><br>
            <input type='text' id='email' name='email' value='".$email."' disabled><br>";
            echo "<input type='button' id='edit' onclick='editarPerfil()' value='Editar Perfil'>";
            echo "<input type='submit' id='button1' value='Terminar Edição' disabled>";
        echo "</form>";
        echo "</div>";
      ?>
        </div>
    </div>
      
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
    $('.nav_btn').click(function(){
    $('.mobile_nav_items').toggleClass('active');
    });
    });
  </script>

</body>
</html>
       
                           