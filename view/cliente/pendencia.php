<?php
  session_start();
?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/cliente/pendencia.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <title>Document</title>
    </head>

    <body>

    <input type="checkbox" id="check">

    <header>

      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>

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

    <div class="sidebar">

      <div class="profile_info">
        <img src="../../img/avatar.jpg" class="profile_image" alt="">

        <!-- echo: nome usuario -->
        
      </div>

      <a href="../../view/cliente/dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="../../view/cliente/perfil.php"><i class="fas fa-cogs"></i><span>Perfil</span></a>
        <a href="../../view/cliente/demanda.php"><i class="fas fa-table"></i><span>Demanda</span></a>
        <a href="../../view/cliente/candidato.php"><i class="fas fa-table"></i><span>Lista de Candidatos</span></a>
        <a href="../../view/cliente/pendencia.php"><i class="fas fa-table"></i><span>Pendências</span></a>
        <a href="../../view/user/sobrenos.php"><i class="fas fa-info-circle"></i><span>Sobre</span></a>
        <a href="../../view/user/config.php"><i class="fas fa-sliders-h"></i><span>Configuração</span></a>
    </div>

    <div class="content">

      <div class="card">

        <div class="text">
         <h2>Suas Solicitações por Profissionais Pendentes!</h2>
        </div>

        <table class="container">
        <thead>
            <tr>
                <th>
                 <h2>Serviço</h2>
                </th>

                <th>
                 <h2>Categoria</h2>
                </th>
        
                <th>
                    <h2>Data</h2>
                </th>

                <th>
                    <h2>Ação</h2>
                </th>
             <tr>
        <?php 
            include_once("../../db/connection.php");

            $query = "SELECT * FROM demanda";

            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                //Leitura de varios itens do banco
                while($retornoDoSelect = mysqli_fetch_array($result)){
                    
                    ?><tr>
                    <td><?php echo $retornoDoSelect['categoria'].'<br>'; ?></td>
                    <td><?php echo $retornoDoSelect['servico'].'<br>'; ?></td>
                    <td><?php echo $retornoDoSelect['data'].'<br>'; ?></td>
                    <td><a href="../../controller/pendenciaQuery.php?iddemanda=<?php echo ($retornoDoSelect["iddemanda"]); ?> 
                    "style="color: green; font-weight: bold; text-decoration: none; cursor: pointer;">Concluído</a></style></td>
                    </tr><?php
                }  
            }else{
                echo("Erro nenhum dado");
            }
          
            mysqli_close($conn);
        ?>
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