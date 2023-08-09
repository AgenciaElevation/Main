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
        <link href="assets/css/colors.php" rel="stylesheet">
        <link href="assets/css/estilos.css" rel="stylesheet">
    </head>

    <body>

        <?php include('header.php'); ?>

        <main class="mgTop2">

            <div class="container">
                <h2>1. Termos</h2>
                <p>Ao acessar ao site <a href='https://www.agenciaelevation.com.br/'>Elevation Agência de Serviços Digitais</a>, concorda em cumprir estes <a href=https://privacidade.me/ target='_BLANK' style='color: #727496; text-decoration: none;'>termos de uso</a>, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</p>
                <h2>2. Uso de Licença</h2>
                <p>É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site Elevation Agência de Serviços Digitais , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode: </p>
                <ol>
                    <li>modificar ou copiar os materiais; </li>
                    <li>usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial); </li>
                    <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no site Elevation Agência de Serviços Digitais; </li>
                    <li>remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou </li>
                    <li>transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</li>
                </ol>
                <p>Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por Elevation Agência de Serviços Digitais a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrónico ou impresso.</p>
                <h2>3. Isenção de responsabilidade</h2>
                <ol>
                    <li>Os materiais no site da Elevation Agência de Serviços Digitais são fornecidos 'como estão'. Elevation Agência de Serviços Digitais não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos. </li>
                    <li>Além disso, o Elevation Agência de Serviços Digitais não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</li>
                </ol>
                <h2>4. Limitações</h2>
                <p>Em nenhum caso o Elevation Agência de Serviços Digitais ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em Elevation Agência de Serviços Digitais, mesmo que Elevation Agência de Serviços Digitais ou um representante autorizado da Elevation Agência de Serviços Digitais tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>
                <h2>5. Precisão dos materiais</h2>
                <p>Os materiais exibidos no site da Elevation Agência de Serviços Digitais podem incluir erros técnicos, tipográficos ou fotográficos. Elevation Agência de Serviços Digitais não garante que qualquer material em seu site seja preciso, completo ou atual. Elevation Agência de Serviços Digitais pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, Elevation Agência de Serviços Digitais não se compromete a atualizar os materiais.</p>
                <h2>6. Links</h2>
                <p>O Elevation Agência de Serviços Digitais não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por Elevation Agência de Serviços Digitais do site. O uso de qualquer site vinculado é por conta e risco do usuário.</p>
                </p>
                <h3>Modificações</h3>
                <p>O Elevation Agência de Serviços Digitais pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>
                <h3>Lei aplicável</h3>
                <p>Estes termos e condições são regidos e interpretados de acordo com as leis do Elevation Agência de Serviços Digitais e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>
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