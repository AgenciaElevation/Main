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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
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

        <main>

            <section id="banner" class="mgTop d-block">
                <iframe title="carousel" class="slider-frame" src="carousel.php"></iframe>
            </section>

            <a id="empresa"></a>
            <div class="emp mt-4"></div>
            <section class="empresa spacer content bg-secondary">
                <div class="container text-white">
                    <h2 class="mb-4 gold">Sobre a Elevation</h2>
                    <div class="row">
                        <div class="col-sm-7 sobre">
                        <?php echo nl2br($linha['sobre']) ?>
                        </div>
                        <div class="col-sm-5 img-right">
                            <img src="assets/img/develop.webp" width="375" height="auto" alt="desenvolvimento web" />
                        </div>

                    </div>
                </div>
            </section>

            <section class="status">
                <div class="container text-white">

                </div>
            </section>

            <a id="servicos"></a>
            <div class="mt-4"></div>
            <section class="servicos spacer content bg-body-tertiary">
                <div class="container">
                    <h2 class="text-primary-emphasis mb-5">Serviços</h2>
                    <div class="row justify-content-center">
                        <div class="card col-sm-3 p-5">
                            <h3 class="text-center pb-4">SITES INSTITUCIONAIS</h3>

                            Principal ponto de contato para mostrar a sua empresa, seus serviços e produtos para o seu público.
                            Tudo com o melhor ranqueamento no Google.
                            <a href="assinatura.php" class="btn btn-primary mt-4">Saiba Mais</a>
                        </div>
                        <div class="card col-sm-3 mx-5 p-5">
                            <h3 class="text-center pb-4">LANDING PAGES</h3>

                            Páginas para ações específicas de captação e/ou eventos, focada para a conversão e captação de leads em campanhas de mídia paga.
                            <a href="assinatura.php" class="btn btn-primary mt-4">Saiba Mais</a>
                        </div>
                        <div class="card col-sm-3 p-5">
                            <h3 class="text-center pb-4">Redes Sociais</h3>

                            Tenha uma página para o Link na Bio do Instagram. <br>
                            Personalize cores e links, apresente produtos e entregue seus melhores conteúdos.
                            <a href="bio.php" class="btn btn-primary mt-4">Saiba Mais</a>
                        </div>
                    </div>

                </div>

                <div class="container">

                    <div class="row justify-content-center pt-5 sm-text">
                        <h2 class="text-center text-primary-emphasis pb-4">Nossa meta é fazer seu site atender às suas necessidades e objetivos do seu negócio! </h2>
                        <h3 class="text-center text-primary-emphasis">Por isso, estamos sempre atualizados com as tendências de performance e tecnologias, <br />
                            para que possamos oferecer soluções otimizadas aos nossos clientes.</h3>
                        <h3 class="text-center mb-4 text-primary-emphasis">Com a Elevation, o seu site terá:</h3>

                        <div class="card col-sm-2 p-3">
                            <i class="fa-solid fa-code icon"></i>
                            <h3 class="text-center py-4">CUSTOMIZAÇÃO</h3>
                            O site é todo personalizado na identidade da marca e de acordo com as necessidades e particularidades da sua empresa.
                        </div>
                        <div class="card col-sm-2 ms-3 p-3">
                            <i class="fa-brands fa-searchengin icon"></i>
                            <h3 class="text-center py-4">SEO OTIMIZADO</h3>
                            Site desenvolvido seguindo as melhores práticas de SEO, que é um fator determinante para um excelente posicionamento no Google.
                        </div>
                        <div class="card col-sm-2 ms-3 p-3">
                            <i class="fa-sharp fa-solid fa-shield icon"></i>
                            <h3 class="text-center py-4">SEGURANÇA</h3>
                            Através da certificação SSL, LGPD e atualizações de infraestrutura, as informações do seu site e deu seus usuários ficam 100% seguras.
                        </div>
                        <div class="card col-sm-2 ms-3 p-3">
                            <i class="fa-sharp fa-solid fa-circle-info icon"></i>
                            <h3 class="text-center py-4">SUPORTE</h3>
                            Nosso time de suporte trabalha para se antecipar aos problemas. Além de realizar atualizações, acompanhamento e backups.
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <a id="planos"></a>
            <div class="mt-4"></div>
            <section class="content spacer planos">
                <div class="container">
                    <h2 class="text-primary-emphasis">Nossos Planos</h2>
                    <p>Você sabia que para ter um site de sucesso você precisa ter: registro de domínio, hospedagem segura e rápida, técnicas eficientes de SEO, certificado de segurança SSL, uma página leve, rápida, bonita, moderna e responsiva, e-mails confiáveis, sistema CMS simples de usar, imagens profissionais, textos persuasivos, além de conhecimento em estratégias de marketing digital</p>
                    <p></p>Não se preocupe com toda essaa burocracia! fora o pagamento mensal da hospedagem, renovação de domínio, etc. <br>
                    <p class="text-primary-emphasis"><strong>Aqui na Elevation nós fazemos tudo por um único valor, em formato de assinatura mensal.</strong></p>

                    <p>Oferecemos manutenção periódica e hospedagem de alta qualidade para os sites de nossos clientes estarem sempre atualizados e seguros. Todos os sites possuem uma área administrativa, que pode ser operada diretamente pelo cliente para qualquer alteração simples (telefone, imagem, etc) ou pode ser feita pela nossa qeuipe técnica.</p>
                    <div class="row justify-content-center pt-5">
                        <div class="col-sm">
                            <div class="card p-4">
                                <div class="card-title text-center">
                                    <a href="assinatura.php">SITE POR ASSINATURA</a>
                                </div>
                                <div class="card-content">
                                    <ul class="list">
                                        <li>Layout Personalizado</li>
                                        <li>Site 100% responsivo</li>
                                        <li>Página Administrativa</li>
                                        <li>SEO do Google</li>
                                        <li>Integração com Whatsapp</li>
                                        <li>E-mail Profissional</li>
                                        <li>Domínio Grátis (.com.br)</li>
                                        <li>Hospedagem Gratuita</li>
                                        <li>Certificação SSL</li>
                                        <li>Manutenção Permanente</li>
                                        <li>Suporte Técnico</li>
                                    </ul>
                                    <hr />
                                    <p class="price-text">R$ <span class="price">79,90</span>/mês
                                        <br />
                                        <span class="brline">* na assinatura por 12 meses</span>
                                    </p>
                                    <div class="text-center">
                                        <a href="assinar.php?site" class="btn btn-success large">ASSINAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card p-4 mtb">
                                <div class="card-title text-center">
                                    <a href="site-bio.php">MINI SITE (BIO)</a>
                                </div>
                                <div class="card-content">
                                    <ul class="list">
                                        <li>Layout Personalizado</li>
                                        <li>Site 100% responsivo</li>
                                        <li>Página Administrativa</li>
                                        <li>SEO do Google</li>
                                        <li>Links Ilimitados</li>
                                        <li>Espaço para Logotipo</li>
                                        <li>Textos, vídeos e Imagens</li>
                                        <li>Hospedagem Gratuita</li>
                                        <li>Certificação SSL</li>
                                        <li>Manutenção Permanente</li>
                                        <li>Suporte Técnico</li>
                                    </ul>
                                    <hr />
                                    <p class="price-text">R$ <span class="price">6,99</span>/mês
                                        <br />
                                        <span class="brline">* na assinatura por 12 meses</span>
                                    </p>
                                    <div class="text-center">
                                        <a href="assinar.php?bio" class="btn btn-success large">ASSINAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card p-4">
                                <div class="card-title text-center">
                                    <a href="negocio.php">GOOGLE MEU NEGÓCIO</a>
                                </div>
                                <div class="card-content">
                                    <ul class="list">
                                        <li>Cadastro da Empresa</li>
                                        <li>Atualização de Dados</li>
                                        <li>Cadastro de novas Fotos</li>
                                        <li>Foto 360° (video)</li>
                                        <li>SEO (Otimização)</li>
                                        <li>Integração com Redes Sociais</li>
                                        <li>Link direto para Whatsapp</li>
                                        <li>Área de Comentários</li>
                                        <li>Consulta Periódica</li>
                                        <li>Manutenção Permanente</li>
                                        <li>Suporte Técnico</li>
                                    </ul>
                                    <hr />
                                    <p class="price-text"><span class="price text-warning">Consulte!</span>
                                        <br />
                                        <span class="brline">* planos personalizados</span>
                                    </p>
                                    <div class="text-center">
                                        <a href="assinar.php?negocio" class="btn btn-warning large">Consultar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row combo mt-4">
                        <div class="card p-4">
                            <div class="card-title text-center">
                                <a href="combo.php" class="text-primary">COMBO PROMOÇÃO VIP</a>
                            </div>
                            <div class="card-content px-4">
                                Com o COMBO PROMOÇÃO vocẽ assina os 3 serviços juntos (por no mínimo 12 meses) e ganha um super desconto!
                                <p>Nesse Combo você terá:</p>
                                <ul class="list">
                                    <li>Site por Assinatura - (R$ 79,90)</li>
                                    <li>Mini Site (BIO) - (R$ 6,99) </li>
                                    <li>TODOS os recursos do Google Meu Negócio <br />
                                        (o total de recursos sai por R$ 44,90 mensais)
                                    </li>
                                </ul>
                                <div class="mob">
                                    <p class="text-center text-primary-emphasis strong mt-3">Fora que você ainda terá o Suporte VIP <br>
                                        por ter adquirido nosso Combo VIP!</p>
                                    <p class="text-center strong">Tudo isso que saíria por R$ <span class="price cancel">131,90</span>/mês, <br>
                                        nas você pagará apenas: </p>
                                    <p class="price-text strong">R$ <span class="price ">94,90</span>/mês
                                        <br />
                                        <span class="brline">* na assinatura por 12 meses</span>
                                    </p>
                                    <div class="text-center">
                                        <a href="assinar.php?bio" class="btn btn-success large">ASSINAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <a id="duvidas"></a>
            <section class="content spacer bg-dark">
                <div class="mt-4"></div>
                <div class="container acor">
                    <h2 class="gold mb-5">Tire suas dúvidas aqui:</h2>

                    <div class="accordion accordion-flush bg-line" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Sou de outra cidade, tem algum problema?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Atendemos todo o Brasil, a maioria do nossos clientes não são da nossa cidade. <br>
                                    Para que isso funcione com segurança para ambas as partes, nós fazemos um contrato bem elaborado, que será assinado de forma digital. <br>
                                    Nós sabemos como funciona esse mercado e temos conhecimento de muita coisa errada que rola por aí, para te dar segurança no investimento, colocamos várias cláusulas que te protegem, como por exemplo a de garantia do desenvolvimento como o combinado ou a devolução do valor investido.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Depois de pronto, posso alimentar o site com outros conteúdos?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Claro! <br>
                                    Sempre que desenvolvemos um website pensamos na praticidade para alimentar os conteúdos nele publicados sem a necessidade de conhecimento técnico. <br>
                                    Você acessará uma página administrativa e nela podera mudar textos, links, imagens, etc.</br>
                                    Para facilitar ainda mais, após a entrega do projeto, enviamos uma série de vídeos mostrando como alimentar o seu site de forma simples.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Preciso ter CNPJ para criar um site?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Não. Você não precisa ter CNPJ para ter um site. Você pode também tê-lo como Pessoa Física utilizando o seu CPF.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Quais são os tipos de site criados pela Elevation?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Fazemos Landing Pages, One Pages, Institucionais, Blogs e Mini sites para Redes Sociais.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Vocês criam sites para todos os segmentos?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Sim. Criamos praticamente para todo o tipo de segmento, porém não atendemos os seguintes segmentos: <br>
                                    Pornografia, prostituição, venda de armas de fogo, venda de anabolizantes, drogas e remédios controlados, apostas e sorteios.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseFour">
                                    O domínio que eu escolher e vocês registrarem será meu ou da Elevation?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">O domínio é seu. Você poderá utilizá-lo em qualquer site que venha fazer no futuro, mesmo que seja com outra empresa.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Quantas alterações posso solicitar em meu site antes de tê-lo aprovado?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Você poderá solicitar quantas alterações forem necessárias até a aprovação.
                                    Ajustaremos seu site até que fique 100% do seu jeito, independente da quantidade de revisões.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Após aprovação, ainda poderei fazer alterações no meu site?
                                </button>
                            </h2>
                            <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Sim. Após a aprovação você receberá um treinamento à sua PÁGINA ADMINISTRATIVA para poder realizar atualizações em seu site.
                                    Ainda assim, poderá entrar em contato conosco sempre que precisar de suporte para utilização do editor.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapseFour">
                                    O site inclui serviço de e-mails? É obrigatório contratá-lo?
                                </button>
                            </h2>
                            <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Seu site conta com até 3 e-mails propfissionais com o seu domínio (com.br).
                                    Isso já faz parte do seu plano e não tem nenhum custo adicional.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Após a criação do site, eu terei que pagar alguma mensalidade?
                                </button>
                            </h2>
                            <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">O sistema de Site por Assinatura da Elevation, você não precisa ter gastos elevados
                                    para a criação do seu site. Todo o valor é dividido em mensalidades -- como em um aluguel de um carro --
                                    e todos os custos já estão embutidos: Domínio, Hospedagem, Email, Manutenção, Suporte, etc.</div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading11">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Como saberei se meu site está sendo bem acessado?
                                    </button>
                                </h2>
                                <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">O site já vem integrado com a ferramenta Google Analytics que permite conhecer em tempo real todos os acessos de seu site. Com ela é possível monitorar
                                        o perfil de quem acessa seu site, páginas mais acessadas, conversões, dispositivos, cidades e outros dados.</div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <a id="contato"></a>
            <div class="mt-4"></div>
            <section class="content spacer contato">
                <div class="container">
                    <h2 class="mb-3">Fale Conosco</h2>
                    <p>Seja qual for a sua dúvida, estamos aqui para atendê-lo.</p>
                    <p>Deixe o seu recado que logo entraremos em contato.</p>
                    <div class="row mt-5">
                        <div class="col-sm-5 left">
                            <form method="post" action="form.php" class="fale">
                                <div class="mb-3">
                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                    <label for="nome" class="form-label">Seu Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Seu E-mail:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="assunto" class="form-label">Assunto:</label>
                                    <input type="text" class="form-control" id="assunto" name="assunto" required>
                                </div>
                                <div class="mb-3">
                                    <label for="mensagem" class="form-label">Mensagem:</label>
                                    <textarea class="form-control t-area" id="mensagem" name="mensagem" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                            </form>
                            <!-- recaptcha 3-->
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script src="https://www.google.com/recaptcha/api.js?render=6Let9zQnAAAAANDIzwhaPxZmhL7j_GAsoLOL8nkq"></script>
                            <script>
                                function onClick(e) {
                                    e.preventDefault();
                                    grecaptcha.ready(function() {
                                        grecaptcha.execute('6Let9zQnAAAAANDIzwhaPxZmhL7j_GAsoLOL8nkq', { action: 'submit'}).then(function(token) {
                                            document.getElementById('g-recaptcha-response').value = token;
                                        });
                                    });
                                }
                            </script>


                        </div>
                        <div class="col mapa">
                             <?= $linha['maps'] ?>
                         </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include('footer.php'); ?>

        <a href="https://wa.me/<?= $linha['whats'] ?>" title="Nosso Whatsapp"><i class="fa-brands fa-whatsapp flutuante"></i></a>

    <?php
}
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(".b-toggler").click(function() {
            $(".responsive").toggle();
        });

        $(".responsive a").click(function() {
            $(".responsive").toggle();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>

    <?php
    if (isset($_GET['email']) && $_GET['email'] == "enviado") {
        echo "<script src='assets/js/swal.email.js'></script>";
    }
    ?>
    </body>

    </html>