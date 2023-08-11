<?php
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $user = $_SESSION['user'];


    require('../cliente.php');
    $cliente = new cliente();
    $consulta = $cliente->consultaALL();

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
            .font {
                font-size: 24px;
                color: #630;
            }

            .text {
                font-size: 19px;
            }

            .last {
                text-align: right;
                padding-right: 25px;
            }

            .resultados {
                margin-top: 40px;
                background-color: #ccc;
                padding: 20px;
                font-size: 20px;
                text-align: center;
                font-weight: bold;
            }

            .spacer {
                padding: 0 50px;
            }

            .conf {
                width: 30%;
                margin: auto;
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
                <div class="container px-4">

                    <div class="row">
                        <div class="m-5"></div>

                    </div>

                    <div class="my-5"></div>

                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4 class="pt-2">
                                <i class="fas fa-list me-1"></i>
                                Lista de Clientes
                            </h4>
                        </div>
                    </div>
                    <?php
                    foreach ($consulta as $linha) {
                        $id = $linha['id'];
                        $planos = ($linha['plano'] == 'site') ? 'Site por Assinatura' : ($linha['plano'] == 'bio' ? 'Bio do Instagram' : 'Google Meu Negócio');
                        $status = ($linha['status'] == 1) ? "<span class='text-success'>Ativo</span>" : "<span class='text-danger'>Inativo</span>";
                        
                        echo "        
                        <div class='accordion accordion-flush bg mb-3' id='accordion$id'>
                        <div class='accordion-item border'>
                            <h2 class='accordion-header' id='flush-heading$id'>
                                <button class='accordion-button collapsed font' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapse$id' aria-expanded='false' aria-controls='flush-collapse$id'>
                                    <strong>" . $linha['dominio'] . "</strong>
                                </button>
                            </h2>
                            <div id='flush-collapse$id' class='accordion-collapse collapse' aria-labelledby='flush-heading$id' data-bs-parent='#accordionFlushExample'>
                                <div class='accordion-body'>
                                    <div class='row text p-2'>
                                        <div class='col-sm-5'><strong>Cliente: </strong>
                                            " . $linha['nome'] . "
                                        </div>
                                        <div class='col'><strong>CPF/CNPJ: </strong>
                                            " . $linha['cpfcnpj'] . "
                                        </div>
                                        
                                <div class='row text mt-3 p-2 '>
                                    <div class='col-sm-5 pad'><strong>Plano: </strong>
                                        $planos
                                    </div>
                                     <div class='col pad2'><strong>Status: </strong>
                                        $status 
                                        </div>";

                        $id = base64_encode($linha['id']);                
                        $hoje = date('Y-m-d');
                        $dataInicial = $linha['data_contrato'];
                        $timestampInicial = strtotime($dataInicial);
                        $segundos = 365 * 24 * 60 * 60;
                        $timestampFinal = $timestampInicial + $segundos;
                        $dataFinal = date('Y-m-d', $timestampFinal);
                        $fimContrato = date('d/m/Y', $timestampFinal);


                        echo "
                                    <div class='col'><strong>Vencimento: </strong>";
                        if(!$dataInicial) {
                            echo ' <span class="text-secondary"> NÃO DEFINIDO  </span>';
                        } else if ($dataFinal >= $hoje) {
                            echo ' <span class="text-success">' . $fimContrato . '</span>';
                        } else {
                            echo ' <span class="text-danger">' . $fimContrato . ' </span>';
                        }
            



                        echo "
                                </div>
                                </div>
                                </div>
                                <div class='row my-4'>
                                <a href='editaCliente.php?id=$id' class='btn btn-success conf'>CONGIGURAR</a>
                                </div>
                            </div>
                        </div>
					</div>";
                    }

                    $total_clientes = 0;
                    $clientes_ativos = 0;

                    foreach ($consulta as $linha) {
                        if ($linha['status'] == 1) {
                            $clientes_ativos++;
                        }
                        $total_clientes++;
                    }
                    echo "
                     <div class='resultados'>
                       Total de Clientes: $total_clientes <span class='spacer'>-</span> Clientes Ativos: $clientes_ativos";
                    ?>
                </div>
        </div>
        <a href="admin.php" class="btn btn-secondary px-4 mt-4">VOLTAR</a>
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