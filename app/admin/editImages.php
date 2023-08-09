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
            <a class="navbar-brand ps-3" href="#">Editar Imagens do Site</a>

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
                <?php
                
                require('../imagens.php');
                $imagens = new imagens();
                $dominio = $imagens->dominio;
                $consulta = $imagens->consultaImagens($dominio);

                foreach ($consulta as $linha) {


                ?>
                    <div class="container-fluid px-4">
                        <div class="row imgs">
                            <div class="m-5"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <div class="card bg-primary text-light text-center mb-3">
                                    <div class="card-body fw-bold">Imagens Carrousel</div>
                                    <div class="card-body bg-light text-dark">
                                        <h5>O padrão das imagens é 1920x600 pixels</h5>
                                        <form class="p-4" method="post" action="processa-editCarousel.php" enctype="multipart/form-data">
                                            <input type="hidden" value="<?= $linha['site'] ?>" name="site">

                                            <div class="row form-row align-items-center mb-5">
                                                <h4 class="my-4">IMAGEM 1</h4>
                                                <div class="col">
                                                    <img class="thumb" src="../../assets/img/slider/<?= $linha['slider1'] ?>">
                                                </div>

                                                <div class="col">
                                                    <figure class="pic" id="pic1">
                                                        <img src="assets/img/picture.png" title="Selecionar imagem" />
                                                        <figcaption id="caption1">
                                                            Selecionar imagem:
                                                        </figcaption>
                                                        <figcaption id="newCaption1" class="text-primary"></figcaption>
                                                    </figure>
                                                    <input type="file" class="form-control d-none" id="slider1" name="slider1">
                                                    <input type="hidden" name="sub1" value="<?= $linha['slider1'] ?>">
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row form-row align-items-center mb-5">
                                                <h4 class="my-4">IMAGEM 2</h4>
                                                <div class="col">
                                                    <img class="thumb" src="../../assets/img/slider/<?= $linha['slider2'] ?>">
                                                </div>

                                                <div class="col">
                                                    <figure class="pic" id="pic2">
                                                        <img src="assets/img/picture.png" title="Selecionar imagem" />
                                                        <figcaption id="caption2">
                                                            Selecionar imagem:
                                                        </figcaption>
                                                        <figcaption id="newCaption2" class="text-primary"></figcaption>
                                                    </figure>
                                                    <input type="file" class="form-control d-none" id="slider2" name="slider2">
                                                    <input type="hidden" name="sub2" value="<?= $linha['slider2'] ?>">
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row form-row align-items-center mb-5">
                                                <h4 class="my-4">IMAGEM 3</h4>
                                                <div class="col">
                                                    <img class="thumb" src="../../assets/img/slider/<?= $linha['slider3'] ?>">
                                                </div>

                                                <div class="col">
                                                    <figure class="pic" id="pic3">
                                                        <img src="assets/img/picture.png" title="Selecionar imagem" />
                                                        <figcaption id="caption3">
                                                            Selecionar imagem:
                                                        </figcaption>
                                                        <figcaption id="newCaption3" class="text-primary"></figcaption>
                                                    </figure>
                                                    <input type="file" class="form-control d-none" name="slider3" id="slider3">
                                                    <input type="hidden" name="sub3" value="<?= $linha['slider3'] ?>">
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row form-row align-items-center mb-5">
                                                <h4 class="my-4">IMAGEM 4</h4>
                                                <div class="col">
                                                    <img class="thumb" src="../../assets/img/slider/<?= $linha['slider4'] ?>">
                                                </div>

                                                <div class="col">
                                                    <figure class="pic" id="pic4">
                                                        <img src="assets/img/picture.png" title="Selecionar imagem" />
                                                        <figcaption id="caption4">
                                                            Selecionar imagem:
                                                        </figcaption>
                                                        <figcaption id="newCaption4" class="text-primary"></figcaption>
                                                    </figure>
                                                    <input type="file" class="form-control d-none" name="slider4" id="slider4">
                                                    <input type="hidden" name="sub4" value="<?= $linha['slider4'] ?>">
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="col mt-4">
                                                <a href="admin.php" class="btn btn-secondary">Cancelar</a>
                                                <a href="javascript:void(0)" class="btn btn-danger resetar">Resetar Carousel</a>
                                                <button type="submit" class="btn btn-primary">Atualizar Imagens</button>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card bg-primary text-light text-center mb-3">
                                    <div class="card-body fw-bold">Imagens do site</div>
                                    <div class="card-body bg-light text-dark">
                                        <h5>O padrão das imagens é 720x480 pixels</h5>
                                        <form class="p-4" method="post" action="processa-editFotos.php" enctype="multipart/form-data">
                                            <input type="hidden" value="<?= $linha['site'] ?>" name="site">

                                            <div class="row form-row align-items-center mb-5">
                                                <h4 class="my-4">Foto Empresa 1</h4>
                                                <div class="col">
                                                    <img class="thumb" src="../../assets/img/<?= $linha['empresa1'] ?>">
                                                </div>

                                                <div class="col">
                                                    <figure class="pic" id="emp1">
                                                        <img src="assets/img/picture.png" title="Selecionar imagem" />
                                                        <figcaption id="capEmp1">
                                                            Selecionar imagem:
                                                        </figcaption>
                                                        <figcaption id="newCapEmp1" class="text-primary"></figcaption>
                                                    </figure>
                                                    <input type="file" class="form-control d-none" name="empresa1" id="empresa1">
                                                    <input type="hidden" name="emp1" value="<?= $linha['empresa1'] ?>">
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row form-row align-items-center mb-5">
                                                <h4 class="my-4">Foto Empresa 2</h4>
                                                <div class="col">
                                                    <img class="thumb" src="../../assets/img/<?= $linha['empresa2'] ?>">
                                                </div>

                                                <div class="col">
                                                    <figure class="pic" id="emp2">
                                                        <img src="assets/img/picture.png" title="Selecionar imagem" />
                                                        <figcaption id="capEmp2">
                                                            Selecionar imagem:
                                                        </figcaption>
                                                        <figcaption id="newCapEmp2" class="text-primary"></figcaption>
                                                    </figure>
                                                    <input type="file" class="form-control d-none" name="empresa2" id="empresa2">
                                                    <input type="hidden" name="emp2" value="<?= $linha['empresa2'] ?>">
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="col mt-4">
                                                <a href="admin.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-primary">Atualizar Imagens</button>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <a href="admin.php" class="btn btn-secondary px-4 mt-4">VOLTAR</a>
                    </div>
                
        </div>
        
        </main>
    <?php } ?>
    </div>

    <footer class="py-4 bg-dark mt-5">
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

    <?php $dom = base64_encode($dominio); ?>

    <script>
        $(".resetar").click(function() {
            Swal.fire({
                title: "Você tem certeza?",
                text: "Não há como desfazer essa ação!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#888',
                confirmButtonText: 'Sim, Resetar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "processa-resetCarousel.php?dom=<?php echo $dom ?>";
                }
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#pic1").click(function() {
                $("#slider1").trigger('click');

                $('#slider1').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#caption1").hide();
                    $("#newCaption1").html(fileName);
                });
            });

            $("#pic2").click(function() {
                $("#slider2").trigger('click');

                $('#slider2').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#caption2").hide();
                    $("#newCaption2").html(fileName);
                });

            });

            $("#pic3").click(function() {
                $("#slider3").trigger('click');

                $('#slider3').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#caption3").hide();
                    $("#newCaption3").html(fileName);
                });

            });

            $("#pic4").click(function() {
                $("#slider4").trigger('click');

                $('#slider4').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#caption4").hide();
                    $("#newCaption4").html(fileName);
                });

            });


            $("#emp1").click(function() {
                $("#empresa1").trigger('click');

                $('#empresa1').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#capEmp1").hide();
                    $("#newCapEmp1").html(fileName);
                });

            });


            $("#emp2").click(function() {
                $("#empresa2").trigger('click');

                $('#empresa2').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#capEmp2").hide();
                    $("#newCapEmp2").html(fileName);
                });

            });

        });
    </script>


    <?php
    if (isset($_GET['edit']) && $_GET['edit'] == "alterado") {
        echo "<script src='js/swal.edit.js'></script>";
    }

    if (isset($_GET['form']) && $_GET['form'] == "empty") {
        echo "<script src='js/swal.vazio.js'></script>";
    }
    ?>

    </body>

    </html>
<?php
} else {
    header('Location: ../../index.php');
}
?>