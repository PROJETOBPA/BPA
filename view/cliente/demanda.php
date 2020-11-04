<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demanda</title>

        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <link rel="stylesheet"  href="../../css/cliente/demanda.css" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
            
    </head>

    <body>   
    
        <div class="container">
                <input type="checkbox" id="check">
            <header>
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label>
            <div class="left_area">
                <h3>BPA <span>"Solicite Profissionais"</span></h3>
            </div>
            <div class="right_area">
                <a href="#" class="logout_btn">Sair</a>
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

            <div class="card-center">

                <form action="../../controller/cadastroDemandaQuery.php" id="form1" method="post">
                    <div class="titulo">
                        <h2>Preencha os Campos com os dados necessários para Concluir sua Demanda!</h2>
                    </div>

                    <div class="Demanda">
                        <div class="Estado">
                            <select class="form-control" id="Estado">
                                <option>Selecionar Estado</option>
                            </select>
                            
                        </div>

                        <div class="Cidade">
                            <select class="form-control" id="Cidade">
                                    <option>Selecionar Cidade</option>
                            </select>
                        </div>

                        <div class="categoria">
                            <select id="categoria" name="categoria" onchange="populate(this.id,'servicos')">
                                <option value="" disabled selected hidden>Selecione a Categoria</option>
                                <option value="assistenciaTecnica">Assistência Técnica</option>
                                <option value="designTecnologia">Design e Tecnologia</option>
                                <option value="servicosDomesticos">Serviços Domésticos</option>
                                <option value="reformas">Reformas</option>
                            </select>
                        </div>

                        <div class="servicos"><select id="servicos" name="servicos">

                        <option value="" disabled selected hidden>Selecione o Serviço</option>
                        </select></div>

                        <div class="textareadiv">
                            <textarea name="descricao" cols="50" rows="4" style="border-radius: 10px; padding: 10px"  form="form1" placeholder="Necessito de um reparo na tela do meu Notebook" id="descricao" required></textarea><br>
                        </div>

                        <div class="button-enviar">
                            <input type="submit" value="Enviar" class="btn" onclick="document.getElementById('demo').innerHTML = Date()">
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

        <!-- Script Data Automática -->
        
        <script type="text/javascript" src="../../js/servicos.js"></script>
        <script type="text/javascript">
            n =  new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
        </script>


        <!-- Script Estado e Local -->

        <script>
            $(document).ready(function(){
                carregar_json('Estado');
                function carregar_json(id, cidade_id){
                    var html = '';

                    $.getJSON('https://gist.githubusercontent.com/letanure/3012978/raw/36fc21d9e2fc45c078e0e0e07cce3c81965db8f9/estados-cidades.json', function(data){
                        html += '<option>Selecionar '+ id +'</option>';
                        console.log(data);
                        if(id == 'Estado' && cidade_id == null){
                            for(var i = 0; i < data.estados.length; i++){
                                html += '<option value='+ data.estados[i].sigla +'>'+ data.estados[i].nome+'</option>';
                            }
                        }else{
                            for(var i = 0; i < data.estados.length; i++){
                                if(data.estados[i].sigla == cidade_id){
                                    for(var j = 0; j < data.estados[i].cidades.length; j++){
                                        html += '<option value='+ data.estados[i].sigla +'>'+data.estados[i].cidades[j]+ '</option>';
                                    }
                                }
                            }
                        }

                        $('#'+id).html(html);
                    });
                    
                }

                $(document).on('change', '#Estado', function(){
                    var cidade_id = $(this).val();
                    console.log(cidade_id);
                    if(cidade_id != null){
                        carregar_json('Cidade', cidade_id);
                    }
                });

            });
        </script>
        <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>
    </body>
</html>