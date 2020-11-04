<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demanda</title>

        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <link rel="stylesheet" href="../../css/demanda.css">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous">
        </script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
    </head>

    <body>   
        <div class="container">

            <header id="titulo">

                <div class="desc-text">
                    <h1>Insira as informações para efetuar sua Demanda!</h1>
                </div>

            </header>
            

            <div class="card-right">

                <!-- <div class="img-center-cad">
                    <img src="../../img/hands.png">
                </div> -->

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
                            <textarea name="descricao" cols="50" rows="4" form="form1" placeholder="Descrição..." id="descricao" required></textarea><br>
                        </div><br>
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
    </body>
</html>