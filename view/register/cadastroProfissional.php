<!-- CORRIR -->
<!-- ajeitar o tamanho da img no css -->
<!-- TERMINAR CODIGO -->

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> -->

    <link rel="stylesheet"  href="../../css/register/cadastroProfissional.css" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    
    <title>Cadastro Profissional</title>
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

        <div class="container-contact100">
		    <form action="../../controller/cadastroProfissionalQuery.php" method="post" class="contact100-form validate-form">
                    <span class="contact100-form-title">
                        Realialize seu Cadastro para Receber Pedidos!
                    </span>

                    <label class="label-input100" for="nome">Nome *</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                            <input type="text"  class="input100" placeholder="Nome" name="nome" id="nome"required>
                            <span class="focus-input100"></span>
                        </div>
                        

                    <label class="label-input100" for="email">E-mail *</label>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input type="text" id="email"  class="input100" placeholder="Eg. examplo@email.com" name="email" required>
                            <span class="focus-input100"></span>
                        </div>

                    <label class="label-input100" for="phone">Telefone *</label>
                        <div class="wrap-input100">
                            <input type="tel" id="telefone" class="input100" placeholder="Eg. +55 00 0000-0000" name="telefone">
                            <span class="focus-input100"></span>
                        </div>

                    <label class="label-input100" for="senha">Senha *</label>
                        <div class="wrap-input100">
                            <input type="senha" id="senha" class="input100" placeholder="*******" name="senha">
                            <span class="focus-input100"></span>
                        </div>


                    <div class="Demanda">

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

                        <option value="" disabled selected hidden>Selecione o Serviço</option></select></div>
                            
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                            <input type="submit" name="cadastrar" id="Entrar" value="Entrar"></button>
                        </div>
                    </div>
            </form>
        </div>
			
        <!-- Script Data Automática -->
        
        <script type="text/javascript" src="../../js/servicos.js"></script>
        <script type="text/javascript">
            n =  new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
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