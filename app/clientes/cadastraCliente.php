<?php
require('../dados.php');
$dados = new dados();
$dominio = $dados->dominio;
$consulta = $dados->consulta($dominio);

foreach ($consulta as $linha) {
    $inicio = date('H:i', strtotime($linha['horarioInicial']));
    $fim = date('H:i', strtotime($linha['horarioFinal']));


?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title><?php echo $linha['titulo'] . " - " . $linha['subtitulo']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
        <meta name="description" content="<?php echo $linha['subtitulo'] ?>">
        <meta name="author" content="<?php echo $linha['site'] ?>">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link href="../../assets/css/estilos.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <?php include('header.php'); ?>
        <main class="mt-5">
            <div class="mt-5 mb-5">&nbsp;</div>
            <div class="container my-5">
                <div class="row-sm-10">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h2 class="text-center font-weight-light my-4">Página Cadastro do Cliente</h2>
                        </div>

                        <div class="card-body f22">
                            <form id="form" method="post" action="processa-cadastroCliente.php">
                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                <div class="row pt-5 px-5">
                                    <div class="col-sm-6">
                                        <div class="m-3 cadastro">
                                            <h3>Dados de Login:</h3>
                                            <input class="form-control" type="email" id="email" name="email" placeholder="Digite seu e-mail" required />
                                            <input class="form-control" type="email" id="email2" name="email2" placeholder="Repita seu e-mail" required />
                                            <input class="form-control" type="password" id="senha" name="senha" 
                                            placeholder="Digite uma Senha" required />
                                            <input class="form-control" type="password" id="senha2" name="senha2" 
                                            placeholder="Repita a Senha" required />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="m-3 cadastro">
                                            <h3>Dados Pessoais:</h3>
                                            <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do Cliente ou da Empresa" required />
                                            <input class="form-control" type="tel" id="fone" name="fone" placeholder="Telefone (apenas números)" required />
                                            <input class="form-control" type="tel" id="cpfcnpj" name="cpf-cnpj" placeholder="CPF/CNPJ (apenas números)" required />
                                            <input class="form-control" type="tel" id="cep" name="cep" placeholder="CEP (apenas números)" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row pt-5 px-5 cadastro">
                                    <h3>Endereço: (carrega automático quando digita o CEP)</h3>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" id="rua" name="rua" placeholder="Rua" required />
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="tel" id="numero" name="numero" placeholder="Número" required />
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" id="complememnto" name="complemento" placeholder="Complemento" />
                                    </div>
                                </div>
                                <div class="row px-5 cadastro">
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" id="bairro" name="bairro" placeholder="Bairro" required />
                                    </div>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade" required />
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" id="uf" name="estado" placeholder="Estado" required />
                                    </div>
                                </div>


                                <div class="row mb-5">
                                    <div class="col-sm-6">
                                        <span class="afirmo f22">
                                            <input type="checkbox" id="afirmo" name="afirmo"><label for="afirmo" required>
                                                <strong class="text-primary-emphasis">Afirmo que todos os dados cadastrados aqui são verdadeiros.</strong></label>
                                        </span>
                                    </div>
                                </div>

                                <h3 class="mx-5 my-4">Confirme seu plano:</h3>
                                <div class="row select-plano px-5">
                                    <div class="col-sm-3">
                                        <div class="card p-3">
                                            <div class="card-title text-center">
                                                <i class="fa-3x fa-solid fa-globe"></i>
                                                <h4>SITE POR ASSINATURA</h4>
                                                <div class="form-check-inline blu">
                                                    <input class="form-check-input" type="checkbox" name="plano1" value="site" id="site">
                                                    <label for="site" class="ms-2 form-check-label">Quero esse plano</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card p-3">
                                            <div class="card-title text-center">
                                                <i class="fa-3x fa-solid fa-user-gear"></i>
                                                <h4>MINI SITE (BIO)</h4>
                                                <div class="form-check-inline blu">
                                                    <input class="form-check-input" type="checkbox" name="plano2" value="bio" id="bio">
                                                    <label for="bio" class="ms-2 form-check-label">Quero esse plano</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card p-3">
                                            <div class="card-title text-center">
                                                <i class="fa-3x fa-solid fa-house"></i>
                                                <h4>GOOGLE MEU NEGÓCIO</h4>
                                                <div class="form-check-inline blu">
                                                    <input class="form-check-input" type="checkbox" name="plano3" value="google" id="google">
                                                    <label for="google" class="ms-2 form-check-label">Quero esse plano</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card p-3">
                                            <div class="card-title text-center">
                                                <i class="fa-3x fa-solid fa-cubes"></i>
                                                <h4>COMBO VIP</h4>
                                                <div class="form-check-inline blu">
                                                    <input class="form-check-input" type="checkbox" name="plano4" value="combo" id="combo">
                                                    <label for="combo" class="ms-2 form-check-label">Quero esse plano</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button id="cadastra" class="m-5 btn btn-success">FINALIZAR CADASTRO</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <?php include('../../footer.php'); ?>

        <a href="https://wa.me/<?= $linha['whats'] ?>" title="Nosso Whatsapp"><i class="fa-brands fa-whatsapp flutuante"></i></a>

    <?php
}
    ?>
    <!-- recaptcha 3-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Let9zQnAAAAANDIzwhaPxZmhL7j_GAsoLOL8nkq"></script>
    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6Let9zQnAAAAANDIzwhaPxZmhL7j_GAsoLOL8nkq', {
                    action: 'submit'
                }).then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                });
            });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#fone").mask("(00) 00000-0000")
            $("#cep").mask("00.000-000")
        })
    </script>
    <script>
        var options = {
            onKeyPress: function(cpfcnpj, e, field, options) {
                var masks = ['000.000.000-009', '00.000.000/0000-00'];
                var mask = (cpfcnpj.length > 14) ? masks[1] : masks[0];
                $('#cpfcnpj').mask(mask, options);
            }
        };

        $('#cpfcnpj').mask('000.000.000-00', options);
    </script>

    <script>
        $(document).ready(function() {
            $('#site, #bio, #google').click(function() {
                if ($(this).prop('checked')) {
                    $('#combo').prop('checked', false);
                }
                if ($('#site').prop('checked') && $('#bio').prop('checked') && $('#google').prop('checked')) {
                    $('#site, #bio, #google').prop('checked', false);
                    $('#combo').prop('checked', true);
                    alert('Ao selecionar os 3 planos, você assina o Combo!');
                }
            });

            $('#combo').click(function() {
                if ($(this).prop('checked')) {
                    $('#site').prop('checked', false);
                    $('#bio').prop('checked', false);
                    $('#google').prop('checked', false);
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(".b-toggler").click(function() {
            $(".responsive").toggle();
        });

        $(".responsive a").click(function() {
            $(".responsive").toggle();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
    </script>

    <script>
            $(document).ready(function() {
            $('#cadastra').click(function(event) {
                event.preventDefault(); // Prevent form submission
                var password1 = $('#senha').val();
                var password2 = $('#senha2').val();
                var email1 = $('#email').val();
                var email2 = $('#email2').val();

                var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

                 if (!passwordPattern.test(password1)) {
                    Swal.fire(
                            'ATENÇÃO!',
                            'A sua senha deve conter pelo menos 1 maiúscula, 1 minúscula, 1 número e ter no mínimo 6 caracteres!',
                            'warning'
                        );
                return;
    }        
                if (password1 !== password2) {
                    Swal.fire(
                            'ERRO!',
                            'As senhas devem ser iguais!',
                            'error'
                        );
                } else if (email1 !== email2) {
                    Swal.fire(
                            'ERRO!',
                            'os Emails devem ser iguais!',
                            'error'
                        );
                } else {
        
                $('#form').submit();
                }
            });
            });
    </script>

    <?php
    if (isset($_GET['insert']) && $_GET['insert'] == "error") {
        echo "<script src='assets/js/swal.insert.js'></script>";
    }
    if (isset($_GET['senha']) && $_GET['senha'] == "error") {
        echo "<script src='assets/js/swal.erroSenha.js'></script>";
    }
    if (isset($_GET['email']) && $_GET['email'] == "error") {
        echo "<script src='assets/js/swal.erroEmail.js'></script>";
    }
    ?>
    </body>

    </html>