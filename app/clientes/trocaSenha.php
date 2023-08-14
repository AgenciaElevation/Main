<?php
    $token = $_GET['token'];
    $email = base64_decode($_GET['crypt']);

    echo "token: $token <br> email: $email";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>ELEVATION - PÁGINA DE TROCA DE SENHA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
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
    <style>
        input {
            font-size: 24px !important;
        }

        .troca {
            margin: 20px 40%;
            padding: 8px 30px;
        }
    </style>
</head>

<body>

    <main>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header text-center">
                            <h3 class="font-weight-light my-4">PÁGINA DE TROCA DE SENHA</h3>
                        </div>
                        <div class="card-body f22">
                            <form method="post" id="form" action="processa-trocaSenha.php">
                                <input type="hidden" name="email" value="<?=$email?>">
                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                <div class="mb-3">
                                    <input class="form-control" type="password" name="senha" id="senha" placeholder="Digite a nova Senha:" required />
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" name="senha2" id="senha2" type="password" placeholder="Repita a nova Senha:" required />
                                </div>
                                <div class="row form-row align-items-center">
                                    <div class="col-sm-6 text-center">
                                        <input type="submit" class="btn btn-primary troca" id="troca" value="CADASTRAR NOVA SENHA">
                                    </div>
                            </form>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
                        
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
                        <script>
                            $(document).ready(function() {
                                $('#troca').click(function(event) {
                                    event.preventDefault(); // Prevent form submission
                                    var password1 = $('#senha').val();
                                    var password2 = $('#senha2').val();
   
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
                                    } else {

                                        $('#form').submit();
                                    }
                                });
                            });
                        </script>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

</body>

</html>