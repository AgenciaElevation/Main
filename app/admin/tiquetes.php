<?php
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $user = $_SESSION['user'];


    require('../suporte.php');
    $suporte = new suporte();
    $consulta = $suporte->consultaAbertos();

?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Informações dos Clientes</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <style>
            .title{
                background-color: #666;
                color: #fff;
                font-size: 24px;
                font-weight: bold;
            }

            .fback{
                height: 200px;
                resize: none;
            }

            .resultados {
                margin: 40px 0;
                background-color: #333;
                color: #fff;
                padding: 20px;
                font-size: 20px;
                text-align: center;
                font-weight: bold;
            }

            .spacer {
                height: 60px;
            }

        </style>

    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Informações dos Clientes</a>

            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group text-white">
                    Usuário: <?=$user; ?>
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
                <div class="container px-4">

                    <div class="row">
                        <div class="m-5"></div>

                    </div>

                    <div class="my-5"></div>

                    <div class="card mb-5">
                        <div class="card-header bg-dark text-white">
                            <h4 class="pt-2">
                            <i class="fa-solid fa-ticket"></i>
                                Tíquetes - Suporte Técnico
                            </h4>
                        </div>
                    </div>
                    <?php
                    foreach ($consulta as $linha) {
                        $id = $linha['id'];
                        $email = $linha['email'];
                        $tiquete = $linha['tiquete'];
                        $abertura = date('d/m/Y', strtotime($linha['created']));
                        echo"
                        <div class='card mb-5'>
                            <div class='card-header title'>
                                <div class='row'>
                                    <div class='col'>".
                                        $abertura . "
                                    </div>
                                    <div class='col'>".
                                        $linha['dominio'] . "
                                    </div>
                                </div>
                            </div>  
                            <div class='card-body'>
                            <form method='post' action='processa-feedback-suporte.php'>
                            <input type='hidden' name='id' value='$id'>
                            <input type='hidden' name='email' value='$email'>
                            <input type='hidden' name='tiquete' value='$tiquete'>
                            <input type='hidden' name='finished' value='1'>
                            <div class='row'>
                                <div class='col'>".
                                    $linha['tiquete'] . "
                                </div>
                                <div class='col'>
                                    <textarea class='form-control fback' name='feedback'
                                    placeholder='Dar feedback ao cliente'>".
                                        $linha['feedback'] . "</textarea> 
                                </div>
                            </div>
                            <div class='row'>
                            <div class='col'>
                                <button class='btn btn-success'>Finalizar Tíquete</button>
                            </div>
                            </form>
                            </div>
                        </div>   
                            
                        </div>";
                    }

                    $total_tiquetes = 0;
                    $tiquetes_abertos = 0;

                    foreach ($consulta as $linha) {
                        if ($linha['finished'] == 0) {
                            $tiquetes_abertos++;
                        }
                    }
                    echo "
                    <div class='row resultados'>
                     <div class='col'>
                       Total de Tíquetes Abertos: $tiquetes_abertos
                     </div>  
                     <div class='col'>
                        <a href='allTiquetes.php' class='btn btn-warning'>VISUALIZAR TODOS OS TIQUETES</a>
                     </div>
                    </div>";
                
                    ?>
                <a href="admin.php" class="btn btn-secondary px-4 mt-4 mb-5">VOLTAR</a>
        </div>
        
        </main>
        <div class="spacer">&nbsp;</div>

        </div>

        <footer class="py-4 bg-dark">
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
                $("footer").addClass('fixed-bottom');
            } else {
                $("footer").removeClass('fixed-bottom');
            }
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