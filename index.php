<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Form Return</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="container">
        <div class="row ">
            <div class="col-md-6 pt-5 pb-5">

                <?php
                $conteudo = true;
                if ($conteudo == true) :
                ?>
                    <table class="table table-hover">
                        <thead class="bg-warning text-white">
                            <th>NOME</th>
                            <th>E-MAIL</th>
                            <th>ESTADO</th>
                        </thead>
                        <tbody class="tbody_content">
                           
                        </tbody>
                    </table>
                <?php
                else :
                ?>
                    <p class='p-3 bg-danger text-white'>Nenhum conteudo aqui</p>
                <?php
                endif;
                ?>
            </div>
            <div class="col-md-6 pt-5 pb-5">
                <form action="" name="form_contact" class="send-form" id="form_contact" method="post">
                    <input type="hidden" name="send_hidden" value="recebe_form">
                    <div class="form-group">
                        <label for="nome">Nome: *</label>
                        <input class="form-control" type="text" name="nome" placeholder="Digite seu Nome." required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail: *</label>
                        <input class="form-control" type="text" name="email" placeholder="Digite seu E-mail." required>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado: *</label>
                        <select name="estado" class="form-control" id="estado">
                            <option>Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </div>
                    <button class="btn  btn-primary btn-lg form-control form-control-lg"><span>Enviar contato</span><img class="img-ajax-loading" src="img/ajax-loader.gif"></button>
                    <div class="erro_tag bg-danger text-center text-white mt-3 p-2">Erro ao cadastrar<br> Tente novamente</div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/send.js"></script>
</body>

</html>