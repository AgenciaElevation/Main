<?php
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $user = $_SESSION['user'];
    $myID = base64_encode($_SESSION['myID']);
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Página Administrativa</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Página Administrativa</a>

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
                        <div class="col-md-2 mb-4">
                            <div class="card bg-dark text-light text-center">
                                <div class="card-body fw-bold">Clientes</div>
                                <div class="card-body bg-light text-dark">

                                    <a href="showClients.php">
                                        <img src="assets/img/client.png" />
                                    </a>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-4">
                            <div class="card bg-primary text-light text-center">
                                <div class="card-body fw-bold">Adicionar Admins</div>
                                <div class="card-body bg-light text-dark">

                                    <a href="#" data-toggle="modal" data-target="#modal-admin">
                                        <img src="assets/img/admins.png" />
                                    </a>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-4">
                            <div class="card bg-primary text-light text-center">
                                <div class="card-body fw-bold">Editar Dados</div>
                                <div class="card-body bg-light text-dark">

                                    <a href="editDados.php">
                                        <img src="assets/img/data.png" />
                                    </a>

                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-4">
                            <div class="card bg-primary text-light text-center">
                                <div class="card-body fw-bold">Editar Imagens</div>
                                <div class="card-body bg-light text-dark">
                                    <a href="editImages.php">
                                        <img src="assets/img/images.png" />
                                    </a>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-4">
                            <div class="card bg-danger text-light text-center">
                                <div class="card-body fw-bold">Trocar Senha</div>
                                <div class="card-body bg-light text-dark">
                                    <a href="mudaSenha.php?id=<?php echo $myID ?>">
                                        <img src="assets/img/pass.png" />
                                    </a>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="my-5"></div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Lista de Admins
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>Data Criação</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Editar</th>
                                        <th class="text-center">Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    require('../usuario.php');
                                    $usuario = new usuario();
                                    $consulta = $usuario->listar();
                                    $num = 1;
                                    foreach ($consulta as $linha) {
                                        $id = $linha['id'];
                                        $id = base64_encode($id);
                                        $user = $linha['username'];
                                        $email = $linha['email'];
                                        $created = date('d/m/Y - H:i', strtotime($linha['created']));
                                        $status = ($linha['status'] == 1) ? "<span class='text-success'>Ativo</span>" : "<span class='text-danger'>Inativo</span>";
                                        $editar = "<a href='editUser.php?id=$id'><img class='icon' src='assets/img/edit.png'></a>";
                                        $excluir = "<a href='javascript:void(0)' class='excluir'><img class='icon' src='assets/img/delete.png'></a>";
                                        echo " 
                                    
                                    <tr>
                                        <td>" . $num++ . "</td>
                                        <td>$user</td>
                                        <td>$email</td>
                                        <td>$created</td>
                                        <td class='text-center'>$status</td>
                                        <td class='text-center'>$editar</td>
                                        <td class='text-center'>$excluir</td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

        </div>

        <footer class="py-4 bg-dark fixed-bottom">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Logado como: <?php echo $user; ?></div>
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
            var windowWidth = $(window).width();

            if (windowWidth > 768) {
                //Means the screen is mobile add a class 
                $("footer").addClass('fixed-bottom');
            } else {
                //Means screen is desktop or tablet 
                $("footer").removeClass('fixed-bottom');
            }
        </script>

        <script>
            $(".excluir").click(function() {
                Swal.fire({
                    title: "Você tem certeza?",
                    text: "Não há como desfazer essa ação!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#888',
                    confirmButtonText: 'Sim, Apagar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "processa-deleteUser.php?id=<?php echo $id ?>";
                    }
                })
            });
        </script>

        <?php include("modal/modal-admin.php"); ?>

        <?php
        if (isset($_GET['edit']) && $_GET['edit'] == "alterado") {
            echo "<script src='js/swal.edit.js'></script>";
        }

        if (isset($_GET['senha']) && $_GET['senha'] == "error") {
            echo "<script src='js/swal.senha.js'></script>";
        }

        if (isset($_GET['insert']) && $_GET['insert'] == "true") {
            echo "<script src='js/swal.insert.js'></script>";
        }

        if (isset($_GET['insert']) && $_GET['insert'] == "error") {
            echo "<script src='js/swal.insertError.js'></script>";
        }

        if (isset($_GET['delete']) && $_GET['delete'] == "true") {
            echo "<script src='js/swal.delete.js'></script>";
        }
        ?>

    </body>

    </html>
<?php
} else {
    header('Location: ../../index.php');
}
?>