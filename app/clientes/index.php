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

        <main>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header text-center">
                                <h3 class="font-weight-light my-4">Página de Login - Clientes</h3>
                                <h4>Seu login é o seu e-mail</h4>
                            </div>
                            <div class="card-body f22">
                                <form method="post" action="processa-loginCliente.php">
                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                    <div class="mb-3">
                                        <input class="form-control" type="text" name="cliente" placeholder="Email de cliente" required />
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" name="senha" type="password" placeholder="senha" required />
                                    </div>
                                    <div class="row form-row align-items-center">
                                        <div class="col-sm-6 text-center">
                                            <input type="submit" name="logar" class="btn btn-primary" id="logar" value="Logar" />
                                </form>
                            </div>
                            <div class="col-sm-6 text-center">
                                <span class="f18">Ainda não é cadastrado?</span>
                                <a href="cadastraCliente.php" class="btn btn-success btn-sm" id="cadastre">Cadastre-se</a>
                            </div>

                        </div>

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
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"></div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </main>

        

    <?php
}
    ?>
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

    <?php
    if (isset($_GET['cadastro']) && $_GET['cadastro'] == "completo") {
        echo "<script src='assets/js/swal.completo.js'></script>";
    }

    if (isset($_GET['erro']) && $_GET['erro'] == "login") {
        echo "<script src='assets/js/swal.error.js'></script>";
    }
    ?>
    </body>

    </html>