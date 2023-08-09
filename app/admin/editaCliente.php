<?php
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $user = $_SESSION['user'];
    $encId = $_GET['id'];
    $id = base64_decode($encId);

    require('../cliente.php');
    $cliente = new cliente();
    $consulta = $cliente->consultaID($id);
    $status = ($cliente->getStatus() == 1) ? "<span class='text-success'>Ativo</span>" : "<span class='text-danger'>Inativo</span>";               
    $ativar = ($cliente->getStatus() == 1) ? "<a href='javascript:void(0)' class='desativa'><img class='icon' src='assets/img/lock.png'>(desativar)</a>" : "<a href='javascript:void(0)' class='ativa'><img class='icon' src='assets/img/check.png'>(ativar)</a>";
    $disabled =  (!$cliente->getDom()) ? '' : 'disabled';
    $pgto =  ($cliente->getContrato()) ? '' : "<a href='processa-pgto.php?id=$encId' class='btn btn-warning'>CONFIRMAR PAGAMENTO</a>";
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
                .client{
                    margin-top: 80px;
                }
                .larg{
                    width: 60%;
                    margin: auto;
                }
                .font20{
                    font-size: 20px;
                }
                .ativa{
                    color: #0a0;
                    text-decoration: none;
                }
                .desativa{
                    color: #a00;
                    text-decoration: none;
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
                        Usuário: <?=$user?>
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
                    <div class="container client">
                        <h3>Editar dados do Cliente</h3>
                        <div class="card larg font20 p-5">
                            <form method="post" action="processa-editCliente.php">
                            <input type="hidden" name="id" value="<?=$id?>" />    
                            <strong>Cliente:</strong> <?=$cliente->getNome()?> - <?=$status?> - <?=$ativar?>
  
                            <br><br>
                            <strong>Domínio:</strong> 
                            <input type="text" class="form-control" name="dominio" value="<?=$cliente->getDom()?>" 
                            <?=$disabled?> />
                            <br>
                            <?=$pgto?>
                            <br><br>
                            <a href="showClients.php" class="btn btn-secondary">VOLTAR</a>
                            <button class="btn btn-success">SALVAR</button>
                            </form>
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
                    $("footer").addClass('fixed-bottom');
                } else {
                    $("footer").removeClass('fixed-bottom');
                }
            </script>


		


        <script>
            $(".desativa").click(function() {
                Swal.fire({
                    title: "Você tem certeza?",
                    text: "O Cliente será desativado!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#888',
                    confirmButtonText: 'Sim, Desativar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "processa-desativaCliente.php?id=<?=$id ?>";
                    }
                })
            });
        </script>

        <script>
            $(".ativa").click(function() {
                Swal.fire({
                    title: "Atenção!",
                    text: "Você deseja ativar novamente esse Cliente?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#33d',
                    cancelButtonColor: '#888',
                    confirmButtonText: 'Sim, Ativar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "processa-ativaCliente.php?id=<?=$id ?>";
                    }
                })
            });
        </script>


        </body>

        </html>
    <?php
} else {
    header('Location: ../../index.php');
}
    ?>