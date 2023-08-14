<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $ID = $_SESSION['ID'];

    require('../cliente.php');
    $cliente = new cliente();
    $consulta = $cliente->consultaID($ID);
    $pgto = ($cliente->getPgto() == 1) ? "<span class='text-success'>Ativo</span>" : "<span class='text-danger'>Inativo</span>";
    $planos = ($cliente->getPlano() == 'site') ? 'Site por Assinatura' : ($cliente->getPlano() == 'bio' ? 'Bio do Instagram' : 'Google Meu Negócio');
    $hoje = date('Y-m-d');
    $dataInicial = $cliente->getContrato();
    $timestampInicial = strtotime($dataInicial);
    $segundos = 365 * 24 * 60 * 60;
    $timestampFinal = $timestampInicial + $segundos;
    $dataFinal = date('Y-m-d', $timestampFinal);
    $fimContrato = date('d/m/Y', $timestampFinal);

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
            h4{
                font-weight: bold;
                margin-bottom: 20px;
            }
            .f20{
                font-size: 20px;
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
                    Cliente: <?=$cliente->getNome() ?>
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
                        <div class="row">
                            <div class="col">
                                <p class="f20">Plano: <?=$planos?></p>
                            </div>
                            <div class="col">
                                <p class="f20">Status: <?=$pgto?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <?php
                                    if(isset($dataInicial)){
                                        if ($dataFinal >= $hoje) {
                                            echo ' <p class="text-success f20">Vencimento: ' . $fimContrato . '</p>';
                                        } else {
                                            echo ' <p class="text-danger f20">Vencimento: ' . $fimContrato . ' </p>';
                                        }
                                    }else{
                                        echo "
                                            <a href='#' data-toggle='modal' data-target='#modal-pgto'
                                            class='btn btn-warning'>FAZER PAGAMENTO</a>";
                                    }
                                ?>
                            </div>
                            <div class="col mt-3">
                                <?php
                                    if (isset($dataInicial) && $dataFinal <= $hoje) {
                                        echo "<a href='#' data-toggle='modal' data-target='#modal-pgto'
                                        class='btn btn-warning'>RENOVAR CONTRATO</a>";
                                    } 
                                ?>
                            </div>

                        </div>
                        

                        
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
                                    ATUALIZANDO EQUIPE
                                </div>
                                <div class="col">
                                    ATUALIZANDO MAPA
                                </div>
                                <div class="col">
                                    PAGAMENTOS
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
                    <form method="post" action="processa-tiquete.php">
                        <input type="hidden" name="dominio" value="<?=$cliente->getDom() ?>">
                        <input type="hidden" name="email" value="<?=$cliente->getEmail() ?>">
                        <textarea class="form-control help" name="tiquete" placeholder="Relate o seu problema"></textarea>
                        <div align="right" class="mt-4 pe-2">
                            <button class="btn btn-primary">ENVIAR</button>
                        </div>
                        
                    </form>
                    
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <div class="row card p-4">
                    <h4>Tíquetes Abertos</h4>
                    <div class="table-responsive">
                            <table class="tiquetes table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Abertura</th>
                                        <th>Tíquete</th>
                                        <th class="text-center">Situação</th>
                                        <th class="text-center">Data Conclusão</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php   
                                        $dom = $cliente->getDom();
                                        require('../suporte.php');
                                        $suporte = new suporte();
                                        $tiquetes = $suporte->consulta($dom);
                                        $num = 1;
                                        foreach ($tiquetes as $linha) {
                                            $abertura = date('d/m/Y', strtotime($linha['created']));
                                            $tiquete = $linha['tiquete'];
                                            $limit = mb_strimwidth($tiquete, 0, 30, "...");
                                            $finished = $linha['finished'];
                                            $conclusao = date('d/m/Y', strtotime($linha['updated']));
                                            $final = (!$linha['updated']) ? "AGUARDE" : $conclusao;
                                            $status = ($linha['finished'] == 0) ? "<span class='text-warning'>em andamento</span>" : "<span class='text-success'>concluído</span>";
                                       
                                         echo "    
                                        <tr>
                                            <td>" . $num++ . "</td>
                                            <td>$abertura</td>
                                            <td>$limit</td>
                                            <td class='text-center'>$status</td>
                                            <td class='text-center'>$final</td>

                                        </tr>";  
                                    }  

                                    ?>
                                </tbody>
                            </table>
                    <a href="cliente.php" class="btn btn-secondary mt-4">VOLTAR</a>
                </div>
                    
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

        <?php include("modal/modal-pgto.php"); ?>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <?php                        
        if (isset($_GET['tiquete']) && $_GET['tiquete'] == "aberto") {
            echo "<script src='assets/js/swal.tiquete.js'></script>";
        }
        ?>


    </body>

    </html>
<?php
} else {
    header('Location: ../../index.php');
}
?>