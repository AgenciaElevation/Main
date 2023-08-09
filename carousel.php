<?php
require('app/imagens.php');
$imagens = new imagens();
$dominio = $imagens->dominio;
$consulta = $imagens->consultaImagens($dominio);

foreach ($consulta as $linha) {

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  </style>
</head>
<body class="bg-secondary">

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/slider/<?=$linha['slider1'] ?>" alt="sites institucionais" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <div class="bg-dark pt-3" style="--bs-bg-opacity: .8;">
          <h3>Sites institucionais por asinatura para pequenas empresas ou profissionais liberais</h3>
          <p>Nosso foco é elaborar sites de carregamento rápido e com conteúdo objetivo e dinâmico, otimizado para SEO Google e também 
            com  as normas internacionais de desempenho, segurança e usabilidae/acessibilidade (Google PageSpeed, LGPD e WCAG).</p>
            <p style="font-weight: bold;">Criamos para você um site moderno e que gera resultados, com um excelente custo-benefício e entregue em até 72h úteis*.</p>
            <a href="assinatura.php" target="_top" class="btn btn-primary my-4">Saiba Mais</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider/<?=$linha['slider2'] ?>" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <div class="bg-dark pt-3" style="--bs-bg-opacity: .8;">
          <h3>SEO - Otimização do Google</h3>
          <p>Posicionamento na web é essencial. Não adianta um site bonito e funcional, sem clientes. <br>
            Desenvolvemos de acordo com as diretrizes impostas pelo Google. <br>
            Melhor posicionamento orgânico <br>
            Sistema de SEO avançado <br>
            Rápido e intuitivo.</p>
            
            <a href="seo.php" target="_top" class="btn btn-primary my-4">Saiba Mais</a>
        </div>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider/<?=$linha['slider3'] ?>" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <div class="bg-dark pt-3" style="--bs-bg-opacity: .8;">
          <h3>Google meu Negócio</h3>
          <p>Veja como o Google Meu Negócio pode aumentar a visibilidade da sua empresa na internet, <br>
            reforçar confiança do público e garantir novas oportunidades de negócios <br>

            O Google possui um grande repertório de produtos digitais que vão muito além da pesquisa web. <br>
            A plataforma oferece diversas ferramentas que conectam você a seus clientes, entre elas está o Google Meu Negócio.</p>
            <a href="negocio.php" target="_top" class="btn btn-primary my-4">Saiba Mais</a>
        </div>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider/<?=$linha['slider4'] ?>" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <div class="bg-dark pt-3" style="--bs-bg-opacity: .8;">
          <h3>Redes Sociais - Página Bio Instagram</h3>
          <p>Tenha uma página para os seus Links na Bio do Instagram. <br>
            Personalize cores e links, apresente produtos e entregue seus melhores conteúdos. <br>
            Integre todas as suas redes sociais em uma só página e monitore os cliques.</p>
            <a href="bio.php" target="_top" class="btn btn-primary my-4">Saiba Mais</a>
        </div>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<?php }  ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>