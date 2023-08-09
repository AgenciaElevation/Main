<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Página de Login - Administrador</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Página de Login - Administrador</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="processa-user.php">
                                       <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="text" name="usuario" placeholder="Usuário" required />
                                            <label for="inputEmail">Usuário</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="senha" type="password" placeholder="Password" required />
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                        <div>
                                            <input type="submit" name="logar" class="btn btn-primary" id="logar" value="Logar" />
                                        </div>
                                    </form>
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
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>

    <?php
    if (isset($_GET['erro']) && $_GET['erro'] == "login") {
        echo "<script src='js/swal.error.js'></script>";
    }
    ?>

</body>

</html>