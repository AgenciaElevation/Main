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
        <title><?php echo $linha['titulo'] . " - " . $linha['subtitulo']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="<?php echo $linha['subtitulo'] ?>">
        <meta name="author" content="<?php echo $linha['site'] ?>">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link href="assets/css/estilos.css" rel="stylesheet">
    </head>

    <body>

        <?php include('header.php'); ?>

        <main class="mgTop2">
            <div class="container f22">
                <div class="row">
                    <h2 class="mb-4">O que é SEO?</h2>
                    <div class="col-sm-6">


                        <p>Search Engine Optimization, mais conhecido como SEO, é uma expressão em inglês, que para nós significa “otimização para motores de busca”. Sua principal característica é melhorar o rankeamento e o alcance orgânico de um site, fazendo com que assim, ele possa aparecer nas primeiras posições de busca no google.</p>

                        <p>Um bom SEO se faz valer de algumas técnicas importantes, como por exemplo, algumas estratégias e técnicas em conjunto com um conteúdo bem elaborado, fazendo a marca de uma organização ganhar visibilidade, em relação às outras.</p>

                        <p> Através de palavras-chave bem elaboradas, o SEO consegue conversar com seus possíveis clientes. Sendo assim, o empreendedor conseguirá estabelecer, por meio de pesquisas e planejamentos, um conteúdo voltado para as dores dos seus consumidores.</p>

                    </div>

                    <div class="col-sm-6"><img src="assets/img/seo.webp"></div>
                </div>
                <div class="row mb-5">
                    <h2 class="mt-5">A importância do SEO para o site</h2>
                    <div class="col-sm-6">

                        <p>SEO consiste na prática de aumentar a quantidade e a qualidade do tráfego para o seu site através de resultados orgânicos de mecanismos de pesquisa.</p>
                        <p><strong>Com uma estratégia eficaz de SEO é possível obter:</strong></p>
                        <ul>
                            <li><strong>Quantidade de tráfego:</strong> Agora que seu site atraiu as pessoas certas, o número de leads clicando nas páginas de resultados do Search Engine do Google (SERPS) mostrarão aos algoritmos que seu site é relevante. O que vai atrair mais tráfego;</li>
                            <li><strong>Qualidade do tráfego:</strong> Boas práticas ajudam a atrair visitantes genuinamente interessados nos produtos que sua empresa oferece;</li>
                            <li><strong>Resultados orgânicos:</strong> Esse aumento de tráfego fortalece o nível de relevância do site de sua empresa junto aos mecanismos de busca. Com isso, ele é impulsionado para aparecer nos primeiros resultados das buscas, gerando mais tráfego orgânico – aquele que não é pago.</li>
                        </ul>

                    </div>

                    <div class="col-sm-6"><img src="assets/img/seo-ranking-factors.webp"></div>
                </div>
                
                <div class="row text-center mt-5">
                    <img class="mt-3 w50" src="assets/img/seo-elements.webp">
                </div>

                <div class="spc pt-5 pb-5"></div>
                <div class="row mb-5 agora">
                <div class="col-sm-6 pe-5">
                    <h3 class="text-center mb-5">Agora que você já sabe a importância do SEO nos websites, saiba que a Elevation tem a maior preocupação em entregar um SEO de alta qualidade, de acordo com os padrões do Google!</h3>
                    <p>Venha para a Elevation que teremos o maior prazer em lhe ajudar alcançar os seus objetivos digitais!</p>
                    <a href="index.php#planos" class="btn btn-success large2">Conheça os Planos</a>

                </div>
                <div class="s100 col-sm-6"><img src="assets/img/seo-100.webp"></div>  
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