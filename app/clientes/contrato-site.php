<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    $ID = $_SESSION['ID'];

    require('../cliente.php');
    $cliente = new cliente();
    $consulta = $cliente->consultaID($ID);
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

            .contrato p,
            .contrato ol,
            .contrato ul {
                font-size: 20px;
                margin-bottom: 20px;
            }

            ol,
            ul {
                margin-left: 60px;
            }

            li {
                margin: 10px 0;
            }
        </style>


    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Página do Cliente</a>

            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group text-white">
                    Cliente: <?= $cliente->getNome() ?>
                </div>
            </form>
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
            <div class="container contrato">

                <h2><strong>PRESTAÇÃO DE SERVIÇOS: CRIAÇÃO E DESENVOLVIMENTO DE WEB SITE</strong> </h2>


                <p>Para os fins deste contrato, entende-se como:</p>

                <p>
                    - <strong>CONTRATANTE: </strong>
                    <?= $cliente->getNome() ?>, inscrita no cpf/CNPJ sob o nº <?= $cliente->getCpfcnpj() ?>,
                    estabelecido na <?= $cliente->getRua() ?> , <?= $cliente->getNum() ?> - Bairro: <?= $cliente->getbairro() ?> -
                    <?= $cliente->getCidade() ?>/<?= $cliente->getEstado() ?>, CEP: <?= $cliente->getCep() ?>,
                    definido como sendo aquele que deseja contratar o
                    serviço de criação e
                    desenvolvimento de seu website;
                </p>

                <p>
                    - <strong>CONTRATADA: </strong>
                    ELEVATION SOLUÇÕES DIGITAIS, pessoa jurídica de direito
                    privado, inscrita no CNPJ sob o nº 51.290.231/0001-18,
                    estabelecida na Rua Doutor Pereira Neto, 1761 - Sala 101,
                    Bairro: Tristeza, Porto Alegre/RS, CEP: 91.920-530, por seus
                    representantes legais constituídos,
                    definida como a empresa prestadora de serviços de criação e desenvolvimento de web site.
                </p>

                <p>
                    - <strong>WEBSITE:</strong> como a página eletrônica disposta na rede mundial
                    de computadores - a
                    Internet;
                </p>

                <p>
                    - <strong>CRIAÇÃO E DESENVOLVIMENTO:</strong> como o serviço para publicar e
                    possibilitar que o
                    cliente tenha presença na rede mundial de computadores -
                    Internet;
                </p>

                <h3>CLÁUSULA 1º: PLANOS</h3>

                <h4>Plano - Site por Assinatura:</h4>
                <p>Ideal para sua empresa mostrar o que faz e para quem faz de
                    forma eficiente e elegante.</p>
                <ul>
                    <li>Layout Personalizado</li>
                    <li>Site 100% responsivo</li>
                    <li>Página Administrativa</li>
                    <li>SEO do Google</li>
                    <li>Textos, vídeos e imagens personalizáveis</li>
                    <li>Integração com Whatsapp</li>
                    <li>Links para as redes sociais</li>
                    <li>Formulário de Contato</li>
                    <li>E-mail Profissional</li>
                    <li>Domínio Incluso (.com.br)</li>
                    <li>Hospedagem Inclusa</li>
                    <li>Certificação SSL</li>
                    <li>Manutenção Permanente</li>
                    <li>Suporte Técnico</li>
                    <li>Capacitação por vídeo</li>
                </ul>

                <h3>CLÁUSULA 2º: VALORES E FORMA DE PAGAMENTO</h3>

                <p>A) Os valores do plano são de 12 parcelas mensais de R$ 79,90 (SETENTA E NOVE REAIS E NOVENTA CENTAVOS).</p>

                <p>B) A forma de pagamento será através de método de pagamento
                    disponibilizado no site
                    da CONTRATADA, com as opções de "pagamento em 12x no cartão"
                    ou "pagamento recorrente".
                </p>

                <p>C) *Promoções e descontos estarão disponíveis para
                    visualização no site da CONTRATADA, caso houver.
                </p>

                <p>D) Após a confirmação de pagamento daremos início ao projeto
                    contratado.
                </p>

                <h3>CLÁUSULA 3º: DO OBJETIVO DO CONTRATO</h3>

                <p>O presente contrato tem como objeto a formulação do conjunto de
                    páginas eletrônicas
                    e gráficas, aqui denominado simplesmente por “WEB SITE", para uso exclusivo na Internet, com referências institucionais do CONTRATANTE, demonstrando os seus produtos, serviços e
                    tecnologia.
                </p>

                <h3>CLÁUSULA 4º: DO WEB SITE</h3>

                <p>A) Após a contratação do plano escolhido o cliente deverá
                    preencher o formulário
                    (briefing) com todas as informações para que possamos confirmar
                    o enquadramento do
                    plano e em seguida enviar o seu projeto ao desenvolvimento. O
                    desenvolvimento do
                    website seguirá o cronograma de produção.</p>


                <p>B)O WEB SITE será desenvolvido com as tecnologias: HTML5, CSS3,
                    Bootstrap 5.3, Jquery, AJAX, PHP 8.1 e MySQL 8 de acordo com o
                    briefing alinhado com o plano aprovado pela CONTRATADA e
                    CONTRATANTE.</p>


                <p>C) O acompanhamento do desenvolvimento e solicitações serão
                    realizadas por ticket de
                    suporte, e através do link na sua área do cliente no site da
                    Elevation.</p>


                <p>D) Serão apresentadas várias opções de Layout para que o cliente
                    escolha. Só após a aprovação do layout o desenvolvimento irá
                    prosseguir o desenvolvimento.</p>


                <p>E) Após a aprovação do layout não será aceita solicitação de
                    novas alterações, vendo que
                    o mesmo foi aprovado pelo cliente, e dado sequência ao projeto
                    para cumprir com o
                    cronograma em caso de necessidade de novas alterações e recursos
                    será cobrado horas
                    adicionais no desenvolvimento.</p>


                <h4>CRONOGRAMA</h4>
                <P>O cronograma proposto para a concretização deste projeto seguirá
                    o prazo definido para as seguintes fases:
                    Obs. No caso de atraso das entregas das informações por conta do
                    cliente o cronograma será reajustado aumentando o prazo final.</P>


                <h5>1ª fase: Planejamento e criação (Prazo: 1 dia)</h5>
                <p>
                    Entrevista com o cliente; Pesquisa e planejamento; análise do
                    briefing e adequação do plano e escolha do layout para o
                    projeto
                </p>
                .

                <h5>2ª fase: Desenvolvimento (Prazo: 1 dia)</h5>
                <p>Registro do domínio e hospedagem, juntamente com o upload do
                    projeto.
                    (nessa fase o site já fica visível para navegação na internet,
                    faltando apenas os ajustes de conteúdo.</p>

                <h5>3ª Fase: Publicação de conteúdo e testes (Prazo: 1 dia)</h5>
                <p>Nesta fase todos os conteúdos (imagens, textos, vídeos, links,
                    etc, fornecidos pelo cliente, são publicados por nossa equipe).
                    Após essa fase toda e qualquer atualização de conteúdos fica sob
                    responsabilidade do cliente, onde terá os tutoriais em vídeo e
                    suporte da nossa equipe em caso de dúvidas ou dificuldades.</p>

                <h5>4ª fase: Entrega</h5>
                <p>Criação de conta no Google Analytics para monitorar visitantes;
                    envio de vídeo com
                    mini tutorial de como atualizar os conteúdos do site (correções
                    de erros e auxílio de
                    suporte para tirar dúvidas).</p>


                <h3>CLÁUSULA 5º: DAS OBRIGAÇÕES DO CONTRATADA</h3>

                <p>A) A CONTRATADA se compromete a desenvolver o objeto deste contrato
                    conforme o plano escolhido e contratado pelo cliente em nosso site, de maneira
                    mais adequada e dinâmica, dando ênfase a marca e a qualidade dos produtos e serviços da
                    CONTRATANTE.</p>

                <p>B) Utilizar recursos que facilitem a navegação, codificação e
                    programação visual,
                    oferecendo ao projeto, usabilidade, tecnologia e design
                    diferenciado.</p>

                <p>C) Seguir o cronograma cumprindo o tempo de entrega do projeto.
                    Não será de
                    responsabilidade da CONTRATADA caso o projeto atrase a entrega,
                    devido o cliente faltar
                    nas entregas de informações para andamento e conclusão do
                    projeto.</p>


                <p>D) A CONTRATADA não se responsabiliza por danos ou prejuízos
                    decorrentes da
                    interrupção da prestação do serviço por casos fortuitos,
                    acidentes naturais, eventos de
                    força maior, determinações legais ou judiciais ou que sejam
                    porventura provocados por:</p>

                <ol class="recuo">
                    <li>Defeitos nos sistemas de comunicação da Empresa de
                        Telecomunicações, uma vez que
                        estes são os meios físicos utilizados para a transmissão de
                        dados via internet;</li>
                    <li>Perda de conteúdo das páginas do CONTRATANTE, atrasos (de
                        qualquer tipo), não
                        transmissão, perda na transmissão, interrupção dos serviços
                        causados por negligência
                        das empresas envolvidas no processo ou erros e omissões do
                        CONTRATANTE, falha na
                        performance, defeito nas redes de comunicação, atrasos na
                        operação ou transmissão,
                        falha na linha de comunicação, falha no acesso ocasionado pela
                        empresa de
                        telecomunicações ou qualquer empresa de telefonia relacionada ao
                        serviço, falha do
                        provedor de acesso, falha na confecção das páginas, furto ou
                        destruição do conteúdo da
                        página por algum acesso não autorizado (hackers, ou piratas
                        eletrônicos), alterações ou
                        uso de gravações das páginas ou de informações sigilosas
                        enviadas por e-mail;</li>
                    <li>A CONTRATADA não garante que o serviço contratado esteja
                        isento de erros, possíveis
                        interrupções ou falhas, ou que o mesmo seja compatível com
                        qualquer hardware ou
                        software específico. Pela extensão máxima permitida pela lei
                        aplicável, a CONTRATADA
                        se isenta de todas as garantias, sejam explícitas ou implícitas,
                        incluindo, sem limitação,
                        garantias implícitas de adequação comercial, adequação para um
                        propósito específico e
                        não-violação em relação ao software e aos materiais escritos que
                        o acompanham.</li>
                </ol>


                <h3>CLÁUSULA 6º: DAS OBRIGAÇÕES DO CONTRATANTE</h3>
                <p> Ficará sobre responsabilidade da CONTRATANTE, a entrega de todo
                    o material necessário
                    para execução dos trabalhos ora solicitados via briefing, tais
                    como:</p>
                <ul>
                    <li>Fotos e imagens a serem adicionadas nas páginas;</li>
                    <li>Textos descritivos;</li>
                    <li>Logotipo;</li>
                    <li>Toda e qualquer informação adicional</li>
                </ul>

                <p>Ficará sobre responsabilidade da CONTRATANTE as atualizações do
                    conteúdo do “WEB SITE”, após a entrega do projeto.</p>


                <h3>CLÁUSULA 7º: É VEDADO AO CONTRATANTE:</h3>

                <ol type="A">
                    <li>Transmitir ou armazenar qualquer informação, dados ou
                        materiais que violem
                        qualquer Lei federal, Lei Estadual, Lei Municipal, Lei
                        Distrital, Decreto, Regulamento, ou
                        em desacordo com qualquer destas;</li>
                    <li>Disponibilizar ou armazenar nos servidores da CONTRATADA
                        qualquer material
                        integral ou parcialmente protegido por direitos autorais sem a
                        expressa e prévia
                        autorização do titular do direito autoral, a não ser que o
                        copyright seja do próprio
                        CONTRATANTE;</li>
                    <li>Disponibilizar ou armazenar nos servidores da CONTRATADA
                        qualquer material lesivo
                        ou atentatório à ética, aos bons costumes, à convivência social,
                        material considerado
                        lesivo aos equipamentos da CONTRATADA ou aos visitantes
                        internautas, material
                        protegido por segredo de Estado ou qualquer outro estatuto
                        legal, arquivos de áudio
                        e/ou vídeo ou similares sem a autorização do titular da produção
                        musical/visual,
                        material obsceno e arquivos do tipo binário (.EXE);</li>
                    <li>Disponibilizar, armazenar, transmitir ou distribuir qualquer
                        material adulto
                        relacionado à pedofilia ou qualquer outro material pornográfico
                        ou que seja proibido ou
                        restrito na legislação brasileira ou internacional;</li>
                    <li>Distribuir abusiva e generalizadamente as caixas postais
                        fornecidas pela
                        CONTRATADA, bem como a utilização indevida das mesmas para envio
                        de SPAM (envio
                        de mensagens eletrônicas sem a solicitação do destinatário),
                        sendo que, caso
                        constatado o envio de SPAM, cabe à CONTRATADA o envio imediato
                        de informações à
                        autoridade competente sobre o CONTRATANTE;</li>
                    <li>Sublocar, permutar, transferir a qualquer título ou permitir
                        à terceiros que utilizem a
                        conta, que é exclusivamente do CONTRATANTE;</li>
                    <li>Efetuar qualquer tentativa de quebra de senhas ou invasão de
                        sites alheios em, ou a
                        partir de um servidor da CONTRATADA, comprometendo-se a
                        respeitar a privacidade e
                        o sigilo de todas as páginas da internet.</li>
                    <li>Utilização excessiva de scripts que possam comprometer a
                        performance dos
                        servidores. Neste caso o CONTRATANTE será convidado a optar por
                        uma conta de
                        hospedagem que seja mais adequada ao seu site, caso não aceite
                        tal alteração, a
                        prestação do serviço será suspensa até o cancelamento dos
                        scripts excessivos;</li>
                    <li>À CONTRATADA caberá avaliar o que constitui violação dessas
                        medidas.</li>
                    <li>Serão imediatamente cancelados os serviços de criação de
                        WEBSITE caso o teor da
                        página viole a Declaração Universal dos Direitos do Homem ou
                        qualquer outra
                        convenção nacional ou internacional de proteção aos direitos
                        humanos, caso ofenda de
                        qualquer forma a comunidade virtual, caso promova, estimule ou
                        forneça instruções
                        acerca de atividades ilegais, promova o dano físico, moral ou de
                        qualquer outra
                        natureza contra qualquer grupo ou indivíduo, caso contenha
                        material que explore,
                        de qualquer forma, menores de idade.</li>
                    <li>Nenhum material ou conteúdo do site do CONTRATANTE poderá
                        conter finalidade
                        (objetiva ou subjetiva) ofensiva ou discriminatória, seja em
                        natureza de sexo, raça, cor,
                        religião, nacionalidade, credo, naturalidade, opção sexual ou de
                        qualquer outra
                        natureza.</li>
                    <li>O CONTRATANTE responde perante a CONTRATADA, objetivamente,
                        por qualquer
                        multa ou penalidade que seja imposta à última por órgãos e/ou
                        organismos nacionais
                        e/ou internacionais em razão de práticas de SPAM, ou quaisquer
                        outras irregularidades
                        praticadas pelo CONTRATANTE.</li>
                    <li>Em caso de cancelamento por qualquer uma das violações
                        citadas, o site será retirado do ar, e o contrato sumariamente
                        cancelado, sem direito a reembolso dos valores pagos.</li>
                </ol>

                <p><strong>Parágrafo Único:</strong> Os arquivos, códigos-fonte, banco de dados e/ou
                    a tecnologia utilizada
                    no sistema operacional são de propriedade Open Source, os quais
                    o CONTRATANTE terá
                    acesso usuário admin onde poderá usar em outros servidores.</p>



                <h3>CLÁUSULA 8º: SUPORTE E DA MANUTENÇÃO DOS SERVIÇOS</h3>

                <ol type="A">
                    <li>A CONTRATADA não se responsabiliza por manutenções e
                        atualizações do WEB SITE.
                        Onde A CONTRATADA se compromete em manter sempre o website
                        funcionando com código correto e livre de bugs, além do suporte
                        dado ao cliente em caso de dúvidas ou solicitações. O período de
                        suporte envolve todo o período de contratação do serviço.</li>
                    <li>A contratação do serviço de criação do WEB SITE aqui
                        contratados não inclui:
                        <ul>
                            <li>Serviços adicionais aos mencionados neste contrato;</li>
                            <li>Elaboração e construção de bancos de dados extras;</li>
                            <li>Produção de fotos;</li>
                            <li>Produção de vídeos;</li>
                            <li>Atualização do Web site depois de entregue;</li>
                            <li>Configuração e criação de usuários no painel do web site;</li>
                            <li>Resolução de problemas apresentados nos equipamentos de comunicação, tais
                                como modems e cabos de redes;</li>
                            <li>Resolução de problemas apresentados em consequência da presença de vírus no
                                equipamento</li>
                            <li>Resolução de problemas apresentados em consequência de software
                                defeituosos, mal instalados ou
                                mal configurados, plug-ins pu add-ons;</li>
                            <li>Criação de novas páginas ou alterações de layout diferenciado
                                para o “WEBSITE” do
                                CONTRATANTE;</li>
                            <li>Problemas que não estão ligados diretamente à CONTRATADA;</li>

                        </ul>

                    </li>
                </ol>

                <p><strong>Parágrafo Primeiro:</strong> A CONTRATADA se reserva no direito de
                    inserir um pequeno
                    texto no rodapé da página principal da CONTRATANTE com a
                    seguinte descrição: "Desenvolvido por Agência Elevation".</p>


                <p><strong>Parágrafo Segundo:</strong> A CONTRATADA se compromete em enviar um link
                    com vídeo
                    instrutivo sobre como fazer atualização de conteúdo no
                    "WEB SITE".</p>


                <p><strong>Parágrafo Único:</strong> A CONTRATADA não se responsabiliza por
                    violações de dados
                    armazenados resultantes de ação criminosa ou irregular de
                    terceiros (hackers), fora dos
                    limites da previsibilidade técnica do momento em que estas
                    vierem a ocorrer ou pela
                    má utilização dos recursos disponibilizados pelo próprio
                    CONTRATANTE.</p>


                <h3>CLÁUSULA 9º: DA RESCISÃO DO CONTRATUAL</h3>

                <p>A) Caso o CONTRATANTE venha a rescindir, desistir ou cancelar o
                    serviço contratado
                    objeto do presente instrumento após o início da prestação do
                    serviço e do seu
                    desenvolvimento, o CONTRATANTE fica ciente de que não ocorrerá a
                    devolução de qualquer valor por parte da CONTRATADA.</p>


                <p>B) Nos casos de rescisão, todo o conteúdo já desenvolvido do WEB
                    SITE e de todos os
                    serviços adicionais eventualmente contratados serão
                    imediatamente deletados, de
                    forma definitiva e irreversível e NÃO MAIS TERÃO CONDIÇÃO DE
                    SEREM RECUPERADOS, CONSIDERANDO-SE PERDIDOS PARA TODO E QUALQUER
                    EFEITO.
                    O presente contrato poderá ser rescindido pelo CONTRATANTE, sem
                    ônus algum, quando:</p>

                <ul>
                    <li>A CONTRATADA não executar os serviços solicitados pelo
                        CONTRATANTE, e que
                        estejam de acordo com as cláusulas deste contrato.</li>
                    <li>Quando a CONTRATADA descumprir alguma das cláusulas deste
                        contrato.</li>
                    <li>O presente contrato poderá ser rescindido pela CONTRATADA,
                        quando:</li>
                    <li>O CONTRATANTE na hipótese de inadimplência das obrigações ora
                        assumidas,
                        devendo a parte inocente notificar a parte culpada ao sanar sua
                        falha no prazo de 10
                        dias, após isso, não sanada a dívida, a CONTRATADA não efetuará
                        qualquer tipo de
                        trabalho para o CONTRATANTE.</li>
                </ul>

                <p><strong>Parágrafo Único:</strong> Pelo código de defesa do consumidor, O CONTRATADO tem 7 (sete
                    dias) para desistir do seu contrato, onde será cobrada uma multa
                    de R$ 80,00 (oitenta reais) referentes aos custos de registro de
                    domínio (que não podem ser ressarcidos pelo serviço do
                    registro.br)</p>


                <h3>CLÁUSULA 10º: PRAZO DE VIGÊNCIA DO PRESENTE CONTRATO</h3>

                <p>O presente contrato vigorará por um prazo determinado de 365
                    dias (um ano), podendo ser renovado ao seu final, mantendo as
                    mesmas disposições.
                    Após 1 ano de contrato, o cliente pode optar por ter uma
                    renovação mensal automática, onde, a partir daí, o contrato pode
                    ser cancelado a qualquer momento, sem ônus adicionais.</p>


                <h3>CLÁUSULA 11º: DISPOSIÇÕES GERAIS</h3>

                <p>A) Nesta proposta encontra-se prevista a implementação do WEB
                    SITE em um único
                    idioma (Português), outras versões deverão ter orçamentos à
                    parte, tratando-se como
                    customização de módulos adicionais.</p>


                <p>B) Não estão contemplados nos serviços prestados deste contrato
                    ao CONTRATANTE, os
                    serviços inerentes à fotografia; aluguel de banco de imagens e
                    produção de conteúdo
                    para o WEB SITE.
                    *ATENÇÃO: OS PLANOS DISPONIBILIZADOS NÃO INCLUEM CADASTRO DE
                    CONTEÚDOS NO WEB SITE; EXEMPLO: TEXTOS, FOTOS E VÍDEOS etc. esse
                    serviço é de responsabilidade do CONTRATANTE.</p>


                <p>C) O CONTRATANTE está ciente de que a CONTRATADA somente
                    realizará os itens do
                    Web site de acordo com os itens do seu plano contratado,
                    conforme constam neste
                    contrato. Qualquer pedido adicional será analisado pela
                    CONTRATADA, e caso seja
                    possível atender o pedido será cobrado separadamente tratando-se
                    como uma
                    “Customização adicional ao plano”, com isso será enviado um
                    orçamento ao
                    Contratante, o mesmo será desenvolvido caso seja aprovado
                    mediante ao orçamento.</p>



                <h3>CLÁUSULA 11º: DA ELEIÇÃO DE FORO</h3>
                <p>Fica eleito o foro da Comarca de Porto Alegre, Estado do Rio
                    Grande do Sul, o qual será, a qualquer tempo, o único competente
                    para todas as ações e procedimentos cabíveis, decorrentes deste
                    instrumento, e para o exercício e o cumprimento dos direitos e
                    obrigações resultantes deste contrato.</p>


                <p>E por estarem assim justas e contratadas, o CONTRATANTE declara
                    ciente de todas as cláusulas deste contrato e aceita todos os termos ao contratar
                    qualquer plano no nosso site.</p>

                <?php

                $timestamp = strtotime($cliente->getContrato());
                $data = strftime('%d de %B de %Y', $timestamp);
                ?>
                <br>
                <p>Porto alegre, <?= $data ?>.</p>


                <div id="botoes">
                    <a href="cliente.php" class="btn btn-secondary px-4 mt-4">VOLTAR</a>
                    <button id="createPDF" class="btn btn-danger px-4 mt-4 mx-4">
                        <i class="fa-solid fa-file-pdf"></i>
                        IMPRIMIR PDF</button>
                </div>
            </div>

        </main>

        <div class="m-5">&nbsp;</div>



        <footer class="py-4 bg-dark">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-light">Logado como: <?= $cliente->getNome() ?></div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
        <script>
            $('#createPDF').click(function() {
                $('nav').hide();
                $('#botoes').hide();
                $('footer').hide();

                window.print();

                $('nav').show();
                $('#botoes').show();
                $('footer').show();
            });
        </script>


    </body>

    </html>
<?php
} else {
    header('Location: ../../index.php');
}
?>