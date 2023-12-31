<?php
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $user = $_SESSION['user'];
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Editar Usuário Administrador</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            .left{
                margin-left: 20px;
            }
        </style>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Editar Usuário Administrador</a>

            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group text-white">
                    Usuário: <?php echo $user; ?>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Logs do Sistema</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="../deslogar.php">Deslogar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="row">
                        <div class="m-5"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="card bg-primary text-light text-center">
                                <div class="card-body fw-bold">Alterar dados</div>
                                <div class="card-body bg-light text-dark">


                                    <?php
                                    $dataId = $_GET['id'];
                                    $dataIds = $_GET['id'];
                                    $dataId = base64_decode($dataId);
                                    require('../usuario.php');
                                    $usuario = new usuario();
                                    $consulta = $usuario->consultaID($dataId);
                                    $username = $usuario->getUsername();
                                    $email = $usuario->getEmail();
                                    $status = $usuario->getStatus();
                                    $ativar = ($status == 1) ? "<a href='javascript:void(0)' class='desativa btn btn-warning left'>Desativar</a>" : 
                                    "<a href='javascript:void(0)' class='ativa btn btn-success left'>Ativar</a>";
 
                                        
                                    ?>

                                    <form class="p-4" method="post" action="processa-editUser.php">
                                        <input type="hidden" name="id" value="<?php echo $dataId ?>">
                                        <div class="row form-row align-items-center pb-5">
                                            <div class="col-sm-2">
                                                <label for="nome">Username:</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" 
                                                value="<?=$username ?>"
                                                name="username" id="username">
                                            </div>
                                        </div>
                                        <div class="row form-row align-items-center pb-5">
                                            <div class="col-sm-2">
                                                <label for="email">Email:</label>
                                            </div>
                                            <div class="col">
                                                <input type="email" class="form-control" 
                                                value="<?=$email ?>"
                                                name="email" id="email">
                                            </div>
                                        </div>
                                        <div class="col">
                                           <?=$ativar?>
                                           <a href="mudaSenha.php?id=<?=$dataIds ?>" class="btn btn-danger ms-4 me-4">Alterar Senha</a>
                                           <br><br>
                                         
                                          <a href="admin.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-primary left">Atualizar dados</button>
                                            
                                        </div>
                                </div>
                                </form>

                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
        </div>
        </main>

        </div>

        <footer class="py-4 bg-dark" style="position: absolute; bottom: 0; width: 100%">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Logado como: <?=$user; ?></div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>

        <script>
            $(".desativa").click(function() {
                Swal.fire({
                    title: "Você tem certeza?",
                    text: "O admin será desativado!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#888',
                    confirmButtonText: 'Sim, Desativar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "processa-desativaUser.php?id=<?=$dataIds ?>";
                    }
                })
            });
        </script>

        <script>
            $(".ativa").click(function() {
                Swal.fire({
                    title: "Atenção!",
                    text: "Você deseja realmente ativar esse Admin?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#33d',
                    cancelButtonColor: '#888',
                    confirmButtonText: 'Sim, Ativar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "processa-ativaUser.php?id=<?=$dataIds ?>";
                    }
                })
            });
        </script>

        <?php
        if (isset($_GET['edit']) && $_GET['edit'] == "alterado") {
            echo "<script src='js/swal.edit.js'></script>";
        }
        ?>

    </body>

    </html>
<?php
} else {
    header('Location: ../../index.php');
}
?>