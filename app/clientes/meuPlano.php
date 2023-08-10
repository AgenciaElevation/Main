<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
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
        <link href="assets/css/cliente.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <style>
        
            .mTop {
                position: relative;
                top: 80px;
            }
            .plano{
                padding: 0 50px;
            }
            .plano .row, .back{
                margin-left: 100px
            }
            .plano .card{
                margin-bottom: 30px;
            }
            .help{
                height: 200px;
                resize: none;
            }
            .tutoriais .row{
                margin-bottom: 20px;
            }
            .spacer{
                padding: 50px;
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
                    Cliente: <?= $cliente->getNome() ?>
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
            <div class="container plano">
                <h2>Meu Plano</h2>

                <div class="row card mt-5 p-4">
                    <h4>Informações</h4>
                        INFORMAÇÕES DO PLANO - LINK DE PAGAMENTO (PLANO NOVO)
                    
                </div>
                
                <div class="row card p-4 tutoriais">
                    <h4>Tutoriais</h4>
                        <div class="row">
                                <div class="col">
                                    LOGANDO
                                </div>
                                <div class="col">
                                    ESQUECI A SENHA
                                </div>
                                <div class="col">
                                    PÁGINA ADMINISTRATIVA
                                </div>
                        </div>

                        <div class="row">
                                <div class="col">
                                    ATUALIZANDO DADOS
                                </div>
                                <div class="col">
                                    ATUALIZANDO CONTEÚDOS
                                </div>
                                <div class="col">
                                    ATUALIZANDO IMAGENS
                                </div>
                        </div>

                        <div class="row">
                                <div class="col">
                                    MUDANDO CORES
                                </div>
                                <div class="col">
                                    MUDANDO A SENHA
                                </div>
                                <div class="col">
                                    GERENCIANDO ADMINS
                                </div>
                        </div>
                </div>

                <div class="row card p-4">
                    <h4>Suporte</h4>
                    <form method="post" action="suporte.php">
                        <input type="hidden" nome="cliente" value="" />
                        <textarea class="form-control help" name="help" placeholder="Relate o seu problema"></textarea>
                        <div align="right" class="mt-4 pe-2">
                            <button class="btn btn-primary">ENVIAR</button>
                        </div>
                        
                    </form>
                    
                </div>


                <div class="row card p-4">
                    <h4>Tíquetes Abertos</h4>
                        NENHUM TÍQUETE ABERTO
                    
                </div>
                    <a href="cliente.php" class="btn btn-secondary back mt-4">VOLTAR</a>
            </div>
                    
        </main>

        <div class="spacer">&nbsp;</div>

        <footer class="py-4 bg-dark">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-light">Logado como: <?= $cliente->getNome() ?></div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>


    </body>

    </html>
<?php
} else {
    header('Location: ../../index.php');
}
?>