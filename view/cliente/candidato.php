<?php

include("../../db/connection.php");

    $query = "SELECT *
    FROM demanda
    INNER JOIN usuario ON demanda.idusuario = usuario.idusuario";
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/cliente/candidato.css">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <title>Candidatos - BPA</title>
    </head>

<body>
    
    <input type="checkbox" id="check">

    <header>

        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>

        <div class="left_area">
            <h3><span>"Candidatos"</span></h3>
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

    <div class="content">

        <div class="card">

            <div class="textt">
                <h2>Olá, usuário BPA! Está disponível os Profissionais que aceitaram sua Solicitação.</h2>
            
                <div class="subtext">
                <h3>Escolha quais Profissionais deseja entrar em contato para negociar!</h3>
                </div>
                
            </div>

                <table class="container">

                    <thead>
                        <tr>
                            <th>
                                <h2>Nome</h2>
                            </th>

                            <th>
                                <h2>E-mail</h2>
                            </th>
                    
                            <th>
                                <h2>Telefone</h2>
                            </th>

                            <tr>
                                <?php
                                
                                $result = mysqli_query($conn, $query );
                                if($result){
                                while ($row = $result->fetch_assoc()) {

                                ?><tr>
                                    <td><?php echo $row['nome'].'<br>'; ?></td>
                                    <td><?php echo $row['email'].'<br>'; ?></td>
                                    <td><?php echo $row['telefone'].'<br>'; ?></td>
                                </tr><?php
                                        
                                }
                                }else{
                                    trigger_error('Invalid query: ' . $conn->error);
                                }
                                ?>
                            </tr>
                        </tr>
                    </thead>
                </table>
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