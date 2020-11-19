<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos Profissional</title>

    <link rel="stylesheet" href="../../css/profissional/pedido.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<input type="checkbox" id="check">

<body>

  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>

    <div class="left_area">
      <h3><span>"Pedido"</span></h3>
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
      <a href="../../view/profissional/dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="../../view/profissional/perfil.php"><i class="fas fa-cogs"></i><span>Pedido</span></a>
      <a href="../../view/profissional/config.php"><i class="fas fa-sliders-h"></i><span>Configuração</span></a>
    </div>

    </div>

    <div class="sidebar">

      <div class="profile_info">
          <img src="../../img/avatar.jpg" class="profile_image" alt="">
        </div>

        <a href="../../view/profissional/dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="../../view/profissional/perfil.php"><i class="fas fa-cogs"></i><span>Perfil</span></a>
        <a href="../../view/profissional/config.php"><i class="fas fa-sliders-h"></i><span>Configuração</span></a>
      </div>
    </div>
  </div>

    <div class="content">
      <div class="card">
        <div class="container">
          <?php
            include_once("../../db/connection.php");
            session_start();
            $idusuario = mysqli_real_escape_string($conn, $_SESSION['idusuario']);
            $query_select = "SELECT categoria, servico FROM usuario WHERE idusuario = $idusuario ";
            $result = mysqli_query($conn, $query_select);

            $retornoDoSelect = mysqli_fetch_array($result);

            $_SESSION['categoria'] = $retornoDoSelect['categoria'];
            $_SESSION['servico'] = $retornoDoSelect['servico'];

            $categoria = mysqli_real_escape_string($conn, $_SESSION['categoria']);
            $servico = mysqli_real_escape_string($conn, $_SESSION['servico']);
          ?>

          <div class="sub-container">
             <h1>Os clientes que solicitaram você, aceite para que eles possam entrar em contato com você!</h1>
            <?php
              $query = "SELECT *
              FROM demanda
              LEFT JOIN profissional ON demanda.iddemanda = profissional.iddemanda
              INNER JOIN usuario ON demanda.idusuario = usuario.idusuario
              WHERE tipo = 0 
              AND demanda.categoria = '$categoria' 
              AND demanda.servico = '$servico' 
              AND profissional.status = 0 ";
              $result = mysqli_query($conn, $query );
              if($result){
                  while ($row = $result->fetch_assoc()) {
                      echo '<div class="caixa">';
                          echo '<form action="../../../bpa-main/controller/pedidoProfissionalQuery.php" id="form1" method="post">';
                              echo '<input type="hidden" name="iddemanda" id=iddemanda value="'.$row['iddemanda'].' " />';
                              // echo $row['iddemanda'].'<br>';
                              echo '<p id="nomes"><span style="font-weight: bold">Nome do Cliente: </span>'.$row['nome'].'</p><br>';

                              echo '<p id="datas"><span style="font-weight: bold">Data: </span>'.$row['data'].'</p><br>';

                              echo '<p id="estados"><span style="font-weight: bold">Estado: </span>'.$row['estado'].'</p><br>';
                          
                              echo '<p id="cidades"><span style="font-weight: bold">Cidade: </span>'.$row['cidade'].'</p><br>';

                              echo '<p id="descricoes"><span style="font-weight: bold">Descrição do pedido: </span>'.$row['descricao'].'</p><br>';
                              echo'<input type="submit" id="buttons" value="Aceitar" class="button-enviar">';
                              
                          echo'</form>';
                      echo '</div>';
                      echo '<br><br>';
                  }
              }else{
                  trigger_error('Invalid query: ' . $conn->error);
              }
            ?>
          </div>
        </div>
     </div>
   </div>
</body>
</html>
