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
                <div class="row py-5">
                    <div class="col-sm-7">
                    <h3>O que é Link na Bio/Agregador de Links?</h3>  

                    <p>O Link na Bio (ou agregador de links) é um recurso oferecido por algumas mídias sociais que permite que você coloque vários links em uma única página da web. Em seguida, você pode colocar o link dessa página na seção da bio do seu perfil no Instagram. Quando um usuário clica no link, ele é levado para a página que contém todos os links que você deseja compartilhar.</p>

                    <p>A principal vantagem de ter um agregador de links na bio do Instagram é a capacidade de fornecer várias maneiras para que seus seguidores possam entrar em contato com você. Além disso, um agregador de links na bio do Instagram permite que você promova diferentes canais de comunicação, como o seu site, canal do Youtube, e-mails e outras redes sociais.</p>

                    <p>Outra vantagem é que você pode direcionar seu tráfego para outras plataformas e conteúdos que você deseja promover, como campanhas de marketing, produtos ou serviços. Isso aumenta a visibilidade da sua marca e pode ajudar a aumentar as conversões. </p>

                    <h3 class="mt-5">Aqui vão alguns dos benefícios em utilizar essa funcionalidade: </h3>

                    <ul class="lista2">
                        <li>Levar seguidores/clientes para páginas de promoções ou cardápio.</li>
                        <li>Fortalecer o posicionamento da marca com materiais institucionais.</li>
                        <li>Levar tráfego para seu site ou posts de blog.</li>
                        <li>Captar leads com landing pages de ebooks, pesquisas ou webinars.</li>
                        <li>Promover seus vídeos do YouTube, músicas/podcast e newsletter. </li>
                        <li>Divulgar campanhas pontuais.</li>
                        <li>Gerar ponto de contato direto para WhatsApp Business.</li>
                        <li>Entender quais são os interesses da sua audiência através dos cliques.</li>
                    </ul>
                    </div>
                    <div class="col-sm-5">
                    <img src="assets/img/bio.png">
                    </div>

                    <div class="row mt-5 bg-white p-5">
                            <h3 class="mb-5">Com a Elevation você terá muito mais do que um agregador de links, mas um verdadeiro site miniatura, totalmente personalizável, com links, fotos, textos, vídeos e muito mais!</h3>

                            <p>Através de uma página administrativa você poderá acessar uma área totalmente segura para editar seus dados, ineserir novos links ou modificar os antigos, definir as cores da sua página, seu logo, inserir textos, imagens, vídeos ou até um cardápio online!</p>

                            <p>Você ainda terá acesso a estatísticas e métricas de quantos cliques cada link seu teve em determinado período de tempo, e assim saber se campanhas suas tiveram os resultados esperados</p>

                            <p>Coloque quantos links quiser, edite, exclua ou crie novamente com essa ferramenta 100% personalizável e inovadora!</p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-4 bio">
                                <img src="assets/img/bio-members.png">
                            </div>
                            <div class="col-sm-4 bio">
                                <img src="assets/img/bio-layout.png">
                            </div>
                            <div class="col-sm-4 bio">
                                <img src="assets/img/bio-status.png">
                            </div>                                                        
                        </div>
                    </div>
                    <div class="row mb-5 px-5 text-center">
                        <h3 class="mb-5 px-5">Agora que você já conhece as vantagens de um Agregador de links na Bio das Redes Sociais, <br> venha para a Elevation que teremos o maior prazer em lhe ajudar a alcançar os seus objetivos digitais!</h3>
                        <a href="index.php#planos" class="btn btn-success assina">Conheça os Planos</a>
                    </div>
                </div>
            </div>



     </main>

        <?php include('footer.php'); ?>

        <a href="ttps://wa.me/<?= $linha['whats'] ?>" target="_blank"><i class="fa-brands fa-whatsapp flutuante"></i></a>

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