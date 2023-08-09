<?php
require('app/dados.php');
$dados = new dados();
$dominio = $dados->dominio;
$consulta = $dados->consulta($dominio);

foreach ($consulta as $linha) {
    $inicio = date('H:i', strtotime($linha['horarioInicial']));
    $fim = date('H:i', strtotime($linha['horarioFinal']));


?>    
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Elevation - O que é Google Meu Negócio?</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="O que é Google Meu Negócio">
        <meta name="author" content="http://www.agenciaelevation.com.br">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <link href="assets/css/estilos.css" rel="stylesheet">
    </head>

    <body>

        <?php include('header.php'); ?>

        <main>
            <div class="container">
                <div class="gmn mgTop">
                    <h2 class="py-3">O que é Google Meu Negócio </h2>
                    <div class="row mb-5">
                        <div class="col-sm-7 text20">
                            <p>Se você ainda não sabe o que é Google Meu Negócio, pode estar perdendo uma excepcional oportunidade para conseguir exposição gratuita nas páginas de respostas do Google, principalmente se você tiver um pequeno negócio local.</p>

                            <p>Criada a pouco mais de cinco anos, o Google Meu Negócio é uma ferramenta gratuita onde uma empresa pode se cadastrar e com isso conseguir uma ótima exposição nos resultados de pesquisas do buscador e também no Google Maps.</p>

                            <p>Ter uma presença online nesta ferramenta ajuda as pessoas a encontrarem sua empresa em diversas situações de pesquisa, como pelo nome da empresa, produtos e serviços que você oferece, e em buscas por localização geográfica.</p>
                        </div>
                        <div class="col-sm-5 foto">
                            <img src="assets/img/negocio.webp" alt="google meu negócio" />
                        </div>
                    </div>
                    <h3 class="py-3">Vantagens Google Meu Negócio </h3>
                    <div class="row">
                        <div class="col-sm-8 text20">
                            <p>Se estar em primeiro lugar nas páginas de respostas do Google já é um ótimo negócio, conseguir uma posição de destaque através da ficha no Google Meu Negócio, é o máximo em termos de exposição.
                            </p>

                            <p> Além disso, em termos de marketing de busca, ter uma presença digital na forma de ficha de empresa, certamente ajudará você a conquistar posições de destaque para outras páginas do seu site, caso você tenha um.</p>

                            <p>Se não tiver um site, isso também não será um problema, pois a ferramenta oferece a oportunidade de criar um, bem simples, é verdade, mas melhor que nada.</p>

                            <p>Além disso, outra das grandes vantagens do Google Meu Negócio é que através dele você poderá criar um canal direto de comunicação entre a sua empresa e seus clientes que estão seguindo a sua empresa em sua ficha.</p>


                            <h4 class="py-3">Algumas outras vantagens:</h4>

                            <ul>
                                <li>Gerar oportunidades e atrair clientes</li>
                                <li>Conversar com seus clientes</li>
                                <li>Obter informações e feedbacks</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 foto">
                            <img src="assets/img/vantagens.webp" alt="Vantagens do Google meu negócio" />
                        </div>
                    </div>
                    <h3 class="py-3">Como a Elevation pode te ajudar?</h3>
                    <div class="row mb-5">
                        <div class="col-sm-7 text20">
                            <p>Podemos otimizar o seu perfil no Google Meu Negócio (caso você já tenha um, ou podemos criar um perfil do zero). Possuímos ferramentas para medir o quanto o seu negócio está gerando de impacto com os seus clientes e otimizá-lo. <br>
                            Somos empresa Parceira do Google!</p>

                            <h4>Entre as otimizações oferecidas estão:</h4>
                            <ul>
                                <li>Ajuste do conteúdo e palavras-chave</li>
                                <li>Fotos e textos atrativos</li>
                                <li>Foto 360° (interna e externa)</li>
                                <li>Integração com Whatsapp e Redes Sociais</li>
                                <li>Monitoramento de resultados</li>
                            </ul>
                        </div>
                        <div class="col-sm-5 foto">
                            <img src="assets/img/profile.webp" alt="Perfil google meu negócio" />
                        </div>
                    </div>
                    <div class="text20 mb-5 saiba">
                        <h4>Temos planos personalizados para o que você precisa!</h4>
                        <a href="consulte.php" class="btn btn-warning">QUERO SABER MAIS</a>
                    </div>
                </div>
            </div>
        </main>

        <?php include('footer.php'); ?>

        <a href="https://wa.me/<?= $linha['whats'] ?>"><i class="fa-brands fa-whatsapp flutuante"></i></a>

        <?php
}
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(".b-toggler").click(function() {
            $(".responsive").toggle();
        });

        $(".responsive a").click(function() {
            $(".responsive").toggle();
        });
    </script>
    </body>

    </html>