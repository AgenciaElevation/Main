<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $ID = $_SESSION['ID'];

    require('../cliente.php');
    $cliente = new cliente();
    $consulta = $cliente->consultaID($ID);

    $comp = $cliente->getComp();
    $comp =  isset($comp) ? $comp : "";
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
            h3,
            h4 {
                margin: 50px 0 30px 0;
                font-weight: bolder;
            }

            h5 {
                margin: 20px 0 10px 0;
                font-weight: bolder;
            }

            .mTop {
                position: relative;
                top: 80px;
            }

            .box {
                display: none;
                width: 320px;
                box-sizing: border-box;
                background-color: #fff;
                border: solid 1px #ccc;
                padding: 30px 60px;
                text-align: center;
                position: fixed;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 9;
                box-shadow: 0 0 10px 8px RGBA(0, 0, 0, 0.6);
            }

            .box .big {
                color: #050;
                font-size: 32px;
            }
        </style>


    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Página do Cliente</a>

            <div class="d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group text-white">
                    Cliente: <?= $cliente->getNome() ?>
                </div>
            </div>
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
            <div class="container plano" align="right">
                <h2 align="left">Meus Dados</h2>

                <form class="p-4" method="post" action="processa-editDadosCliente.php">
                    <div class="row form-row align-items-center pb-3">
                        <div class="col-sm-2">
                            <label for="nome">Domínio:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $cliente->getDom() ?>" disabled>
                            <input type="hidden" name="dom" value="<?= $cliente->getDom() ?>">
                        </div>
                    </div>
                    <div class="row form-row align-items-center pb-3">
                        <div class="col-sm-2">
                            <label for="titulo">Nome:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $cliente->getNome() ?>" name="nome" disabled>
                        </div>
                    </div>
                    <div class="row form-row align-items-center pb-3">
                        <div class="col-sm-2">
                            <label for="subtitulo">E-mail:</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="email" class="form-control" value="<?= $cliente->getEmail() ?>" name="email" id="email required">
                        </div>
                        <div class="col-sm-1">
                            <label for="fone">Fone:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $cliente->getFone() ?>" name="fone" id="fone" required>
                        </div>
                        <div class="col-sm-1">
                            <label for="whats">Whatsapp:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $cliente->getWhats() ?>" name="whats" id="whats">
                        </div>
                    </div>
                    <div class="row form-row align-items-center pb-3">
                        <div class="col-sm-2">
                            <label for="dias">CEP:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" value="<?= $cliente->getCEP() ?>" name="cep" id="cep" required>
                        </div>
                        <div class="col-sm-1">
                            <label for="inicio">Rua:</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?= $cliente->getRua() ?>" name="rua" id="rua" required>
                        </div>
                        <div class="col-sm-1">
                            <label for="inicio">Número:</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" value="<?= $cliente->getNum() ?>" name="num" id="num" required>
                        </div>
                    </div>

                    <div class="row form-row align-items-center pb-3">
                        <div class="col-sm-2">
                            <label for="dias">Complento:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $comp ?>" name="comp" id="comp">
                        </div>
                        <div class="col-sm-1">
                            <label for="inicio">Bairro:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $cliente->getBairro() ?>" name="bairro" id="bairro" required>
                        </div>
                    </div>

                    <div class="row form-row align-items-center pb-3">
                        <div class="col-sm-2">
                            <label for="dias">Cidade:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $cliente->getCidade() ?>" name="cidade" id="cidade" required>
                        </div>
                        <div class="col-sm-1">
                            <label for="inicio">Estado:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?= $cliente->getEstado() ?>" name="estado" id="uf" required>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <a href="cliente.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Atualizar Dados</button>

                    </div>
            </div>
            </form>

            </div>

        </main>

        <footer class="py-4 bg-dark fixed-bottom">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-light">Logado como: <?= $cliente->getNome() ?></div>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
        <script src="js/scripts.js"></script>

        <?php
        if (isset($_GET['edit']) && $_GET['edit'] == "alterado") {
            echo "<div class='box'>
                <p class='big'>ATUALIZADO!</p>
                <p>Dados atualizados com sucesso!</p>
            </div>";
        }
        ?>
    <script>
        $(function(){
            $(".box").fadeIn(1000, function(){
                window.setTimeout(function(){
                    $('.box').fadeOut(500);
                }, 2000);
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#fone").mask("(00) 00000-0000")
            $("#cep").mask("00.000-000")
        })
    </script>

        

        <script>
            $(document).ready(function() {

                function limpa_formulário_cep() {
                    // Limpa valores do formulário de cep.
                    $("#rua").val("");
                    $("#num").val("");
                    $("#comp").val("");
                    $("#bairro").val("");
                    $("#cidade").val("");
                    $("#uf").val("");
                    $("#ibge").val("");
                }

                //Quando o campo cep perde o foco.
                $("#cep").blur(function() {

                    //Nova variável "cep" somente com dígitos.
                    var cep = $(this).val().replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if (validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            $("#rua").val("...");
                            $("#num").val("");
                            $("#comp").val("");
                            $("#bairro").val("...");
                            $("#cidade").val("...");
                            $("#uf").val("...");
                            $("#ibge").val("...");

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#rua").val(dados.logradouro);
                                    $("#bairro").val(dados.bairro);
                                    $("#cidade").val(dados.localidade);
                                    $("#uf").val(dados.uf);
                                    $("#ibge").val(dados.ibge);
                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                });
            });
        </script>

    </body>

    </html>
<?php
} else {
    header('Location: ../../index.php');
}
?>