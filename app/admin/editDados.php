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
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Editar Conteúdo do Site</a>

            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group text-white">
                    Usuário: <?= $user; ?>
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
                <?php
                require('../dados.php');
                $dados = new dados();
                $dominio = $dados->dominio;
                $consulta = $dados->consulta($dominio);

                foreach ($consulta as $linha) {


                ?>
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="m-5"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="card bg-primary text-light text-center mb-5">
                                    <div class="card-body fw-bold">Alterar dados do Site</div>
                                    <div class="card-body bg-light text-dark">
                                        <form class="p-4" method="post" action="processa-editDados.php">
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="nome">Domínio:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['site'] ?>" disabled>
                                                    <input type="hidden" value="<?= $linha['site'] ?>" name="site">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="titulo">Título:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['titulo'] ?>" name="titulo" id="titulo">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="subtitulo">Subtítulo:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['subtitulo'] ?>" name="subtitulo" id="subtitulo">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="fone">Fone:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['fone'] ?>" name="fone" id="fone">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="whats">Whatsapp:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="tel" class="form-control" value="<?= $linha['whats'] ?>" name="whats" id="whats">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="dias">Dias:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['dias'] ?>" name="dias" id="dias">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="inicio">Hora/Início:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="time" class="form-control" value="<?= $linha['horarioInicial'] ?>" name="inicio" id="inicio">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="fim">Hora/Fim:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="time" class="form-control" value="<?= $linha['horarioFinal'] ?>" name="fim" id="fim">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="mapa">Mapa:</label>
                                                </div>
                                                <div class="col">
                                                    <textarea class="form-control mapa" name="maps"><?= $linha['maps'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col mt-4">
                                                <a href="admin.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-primary">Atualizar Dados</button>

                                            </div>
                                    </div>
                                    </form>

                                    <div class="card-footer">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card bg-primary text-light text-center mb-3">
                                    <div class="card-body fw-bold">Mudar Logo</div>
                                    <div class="card-body bg-light text-dark">
                                        <div class="row text-center mb-2">
                                            <img class="logo" src="../../assets/img/<?= $linha['logo'] ?>" alt="Logotipo da Empresa" />
                                        </div>
                                        <form class="p-4" method="post" action="processa-editLogo.php" enctype="multipart/form-data">
                                            <input type="hidden" value="<?= $linha['site'] ?>" name="site">
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col">
                                                    <input type="file" class="form-control" name="logo" id="logo" required>
                                                </div>
                                            </div>
                                            <div class="col mt-4">
                                                <a href="admin.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-primary">Atualizar Logo</button>

                                            </div>
                                        </form>
                                    </div>


                                    <div class="card-footer">
                                    </div>
                                </div>


                                <div class="card bg-primary text-light text-center mb-5">
                                    <div class="card-body fw-bold">Editar Redes Sociais</div>
                                    <div class="card-body bg-light text-dark">
                                        <form class="p-4" method="post" action="processa-editRedes.php">
                                            <input type="hidden" value="<?= $linha['site'] ?>" name="site">
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="facebook">Facebook:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['facebook'] ?>" name="facebook" id="facebook">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="instagram">Instagram:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['instagram'] ?>" name="instagram" id="instagram">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="twitter">Twitter:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['twitter'] ?>" name="twitter" id="twitter">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="youtube">YouTube:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['youtube'] ?>" name="youtube" id="youtube">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="linkedin">LinkedIn:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="tel" class="form-control" value="<?= $linha['linkedin'] ?>" name="linkedin" id="linkedin">
                                                </div>
                                            </div>
                                            <div class="row form-row align-items-center pb-3">
                                                <div class="col-sm-2">
                                                    <label for="tiktok">Tik Tok:</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" value="<?= $linha['tiktok'] ?>" name="tiktok" id="tiktok">
                                                </div>
                                            </div>
                                            <div class="col mt-4">
                                                <a href="admin.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-primary">Atualizar Redes Sociais</button>

                                            </div>
                                    </div>
                                    </form>

                                    <div class="card-footer">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2"></div>
                        </div>
                        <form method="post" action="processa-editConteudo.php">
                            <input type="hidden" value="<?= $linha['site'] ?>" name="site">
                            <div class="row">
                                <div class="col-sm-4 mb-4">
                                    <div class="card bg-primary text-light text-center">
                                        <div class="card-body fw-bold">Sobre a Empresa</div>
                                        <div class="card-body bg-light text-dark">
                                            <div class="row form-row align-items-center">
                                                <textarea class="form-control ta" name="empresa" id="empresa"><?= $linha['sobre'] ?></textarea>

                                            </div>
                                        </div>
                                        <div class="card-footer"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <div class="card bg-primary text-light text-center">
                                        <div class="card-body fw-bold">Serviços</div>
                                        <div class="card-body bg-light text-dark">
                                            <div class="row form-row align-items-center">
                                                <textarea class="form-control ta" name="servicos" id="servicos"><?= $linha['servicos'] ?></textarea>

                                            </div>
                                        </div>
                                        <div class="card-footer"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <div class="card bg-primary text-light text-center">
                                        <div class="card-body fw-bold">Equipe</div>
                                        <div class="card-body bg-light text-dark">
                                            <div class="row form-row align-items-center">
                                                <textarea class="form-control ta" name="equipe" id="equipe"><?= $linha['equipe'] ?></textarea>

                                            </div>
                                        </div>
                                        <div class="card-footer"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 text-center">
                                <div class="col mb-5">
                                    <a href="admin.php" class="btn btn-secondary">Voltar</a>
                                    <button type="submit" class="btn btn-primary">Atualizar Conteúdos</button>
                        </form>
                    </div>
        </div>
        </main>
    <?php } ?>
    
    </div>
    <div class="m-5">&nbsp;</div>
    <footer class="py-4 bg-dark mt-5">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Logado como: <?= $user; ?></div>
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