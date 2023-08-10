<?php
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $ID = $_SESSION['ID'];

    require('../cliente.php');
    $cliente = new cliente();
    $consulta = $cliente->consultaID($ID);
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Elevation - Página do Cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="assets/css/cliente.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
    <style>
        .mTop{
            position: relative;
            top: 80px;
        }
        .client-link{
            color: #900;
        }
        .client-link:hover{
            color: #999;
        }
    </style>
    
    
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Página do Cliente</a>

            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group text-white">
                    Cliente: <?=$cliente->getNome()?>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="../deslogar.php">Deslogar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

            <main class="mTop">
                <div class="container">
                    <h2>Olá <?=$cliente->getNome()?>, bem vindo de volta!</h2>

                    <div class="row">
                        <div class="m-5"></div>
                        <div class="col-md-2 mb-4">
                            <div class="card bg-dark text-light text-center">
                                <div class="card-header ">Meu Contrato</div>
                                <div class="card-body bg-light text-dark">

                                    <a href="contrato.php" class="client-link">
                                     <i class="fa-solid fa-3x fa-file-contract"></i>
                                    </a>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-4">
                            <div class="card bg-dark text-light text-center">
                                <div class="card-header">Meu Plano</div>
                                <div class="card-body bg-light text-dark">

                                <a href="meuPlano.php" class="client-link">
                                     <i class="fa-solid fa-3x fa-chart-line"></i>
                                    </a>

                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-4">
                            <div class="card bg-dark text-light text-center">
                                <div class="card-header">Meus Dados</div>
                                <div class="card-body bg-light text-dark">

                                    <a href="meusDados.php" class="client-link">
                                     <i class="fa-solid fa-3x fa-rectangle-list"></i>
                                    </a>

                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>

            </main>



        <footer class="py-4 bg-dark fixed-bottom">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-light">Logado como: <?=$cliente->getNome()?></div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>



    </body>

    </html>
<?php
} else {
    header('Location: ../../index.php');
}
?>