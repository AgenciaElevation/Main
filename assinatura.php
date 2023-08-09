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
                    <h2>Site por assinatura, você já conhece esta novidade?</h2>
                    <h3>Entenda as vantagens e o porque este formato vem conquistando o mercado de desenvolvimento de sites no Brasil.</h3>
                </div>
                <div class="row mt-4">
                    <h4 class="text-primary-emphasis">Primeiramente, antes de explicarmos o que é site por assinatura, precisamos entender a
                        opção mais comum encontrada no mercado quando pensamos em desenvolver um site.</h4>

                    <h4 class="text-primary-emphasis">Então vamos lá, funciona assim:</h4>

                    <p>Inicialmente se busca para a execução do projeto um fornecedor, seja ele uma empresa ou um freelancer.</p>

                    <p>Ao encontrar este fornecedor, a princípio será proposto um valor ou aporte inicial que costuma ser bem salgado somente para o desenvolvimento do site.</p>

                    <p>Em segundo lugar, após o desenvolvimento do site para sua publicação final, este projeto irá gerar uma mensalidade de hospedagem.</p>

                    <p>Após os gastos com desenvolvimento e publicação do site, chegam as manutenções, preventivas, corretivas ou evolutivas do projeto.</p>

                    <p>Em outras palavras, sempre que precisar de ajustes ou evoluções no site, será necessário contratar a execução destas demandas a parte ou as garantir através de uma mensalidade com o desenvolvedor de seu projeto.</p>

                    <p>E pra finalizar, além dos altos custos de criação e manutenção do projeto, somamos a esta conta, a falta de compromisso com a execução dentro dos prazos estipulado e com o resultado final do projeto.</p>
                </div>
                <div class="row mt-4">
                    <h3>E foi aí, justamente para preencher esta lacuna entre a alta demanda do mercado para produção de sites e a entrega disso através
                        de um formato mais comprometido, profissional e justo, que surgiu o formato de site por assinatura.</h3>
                    <p class="text-primary-emphasis"><strong>Manter um projeto, principalmente se for voltado para alta conversão proprietário
                            hoje em dia custa muito caro para as marcas.</strong></p>

                    <div class="col-sm-6 mt-4">
                        <p>Aqui na Elevation entregamos nossos serviços através deste formato, o de site por assinatura e com este ele já atendemos milhares de assinantes em todo o país.</p>

                        <p>Através deste formato democrático, conseguimos dar a oportunidade que todos negócios precisam para ter um site profissional, e sobre tudo uma forte presença digital sem precisar se desprender de altos investimentos, com uma pequena assinatura mensal.</p>

                        <p>Mas se ainda assim você não se convenceu de que esta é uma opção ou melhor dizendo a melhor opção para tirar seu projeto do papel, confira a seguir algumas outras vantagens de ter um site por assinatura:</p>

                        <ul class="vantagens">
                            <li>Possibilidade de reverter o custo de desenvolvimento, para compra de tráfego qualificado.</li>
                            <li>Fique livre da execução de manutenções custosas e pesadas, e foque no seu negócio.</li>
                            <li>Garanta um site sempre em dia com os padrões do Google.</li>
                            <li>Garantia de gestão do projeto: O desenvolvedor nunca desaparece.</li>
                            <li>Livre de custos com manutenção corretiva e evolutiva no projeto.</li>
                            <li>Site sempre atualizado e seguro contra novas vulnerabilidades.</li>
                            <li>Sem preocupação com custos de domínio e hospedagem.</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <h3>Assista aqui um vídeo explicativo sobre o Site por Assinatura:</h3>
                        <img src="assets/img/seo.webp">
                    </div>
                    <div class="row bg-white p-4 my-5">
                        <div class="col-sm-6">
                            <h2 class="text-center">Site por Assinatura</h2>
                            <ul class="lista ass">
                                <li>Baixo custo mensal</li>
                                <li>Entrega em até 3 dias úteis</li>
                                <li>Domínio incluso</li>
                                <li>Hospedagem inclusa</li>
                                <li>Certificado SSL incluso</li>
                                <li>Manutenção e Suporte inclusos</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="tr1 text-center">Site Tradicional</h2>
                            <ul class="lista trad">
                                <li>Alto investimento</li>
                                <li>Demora na entrega</li>
                                <li>Custos com Domínio</li>
                                <li>Custos com Hospedagem</li>
                                <li>Custos com Certificado SSL</li>
                                <li>Custos com Manutenção</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5 text-center">
                        <h3 class="mb-5 px-5">Agora que você já conhece as vantagens de um Site por Assinatura</span>,<br> venha para a Elevation que teremos o maior prazer em lhe ajudar a alcançar os seus objetivos digitais!</h3>
                        <a href="index.php#planos" class="btn btn-success assina">Conheça os Planos</a>

                    </div>
                </div>
            </div>
        </main>

        <?php include('footer.php'); ?>

        <a href="https://wa.me/<?= $linha['whats'] ?>" target="_blank"><i class="fa-brands fa-whatsapp flutuante"></i></a>

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