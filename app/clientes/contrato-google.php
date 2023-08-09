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
        h3, h4{
            margin: 50px 0 30px 0;
            font-weight: bolder;
        }
        h5{
            margin: 20px 0 10px 0;
            font-weight: bolder;
        }
        .mTop{
            position: relative;
            top: 80px;
        }
        .contrato p, .contrato ol, .contrato ul{
            font-size: 20px;
            margin-bottom: 20px;
        }
        ol, ul{
            margin-left: 60px;
        }
        li{
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
                    Cliente: <?=$cliente->getNome()?>
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

                <h2><strong>PRESTAÇÃO DE SERVIÇOS: GOOGLE MEU NEGÓCIO</strong></h2>


                <p>Para os fins deste contrato, entende-se como:</p>

                <p>
                    - <strong>CONTRATANTE: </strong> 
                    <?=$cliente->getNome()?>, inscrita no cpf/CNPJ sob o nº <?=$cliente->getCpfcnpj()?>,
                    estabelecido na  <?=$cliente->getRua()?> , <?=$cliente->getNum()?> - Bairro: <?=$cliente->getbairro()?> - 
                    <?=$cliente->getCidade()?>/<?=$cliente->getEstado()?>, CEP: <?=$cliente->getCep()?>,                
                    definido como sendo aquele que deseja contratar o
                    serviço;
                </p>

                <p>
                - <strong>CONTRATADA: </strong> 
                    ELEVATION SOLUÇÕES DIGITAIS, pessoa jurídica de direito
                    privado, inscrita no CNPJ sob o nº 51.290.231/0001-18,
                    estabelecida na Rua Doutor Pereira Neto, 1761 - Sala 101,
                    Bairro: Tristeza, Porto Alegre/RS, CEP: 91.920-530, por seus
                    representantes legais constituídos, 
                    definida como a empresa prestadora de serviços.
                </p>

                <p>
                    - <strong>GOOGLE MEU NEGÓCIO: </strong> como a página eletrônica disposta na rede mundial
                    de computadores - a Internet, contendo uma ficha com os dados da empresa, fotos, contatos, avaliações;
                </p>

                <p>
                    - <strong>OTIMIZAÇÃO DA FICHA: </strong> Trata-se do preenchimento correto da ficha cadastral do Google 
                    Meu Negócio, assim como o upload de fotos e ajustes otimizados para que o negócio seja melhor visualizado 
                    e nas primeiras posições nos serviços do Google.
                </p>

                <h3>CLÁUSULA 1º: PLANOS</h3>

                <h4>Plano - Google Meu Negócio:</h4>
                <p>Ideal para sua empresa mostrar o que faz e para quem faz de
                    forma que seja melhor visualizada na rede de pesquisa de negócios locais.</p>
                <ul>
                    <li>Cadastro da Empresa</li>
                    <li>Atualização de Dados</li>
                    <li>Cadastro de novas Fotos</li>
                    <li>Foto 360° (google maps)</li>
                    <li>SEO (Otimização)</li>
                    <li>Integração com Redes Sociais</li>
                    <li>Site Interativo do Google (empresa.negocio.site)</li>
                    <li>Link direto para Whatsapp</li>
                    <li>Área de Comentários</li>
                    <li>Suporte Técnico</li>
                </ul>

                <h3>CLÁUSULA 2º: VALORES E FORMA DE PAGAMENTO</h3>

                <p>A) Os valores do plano são de 12 parcelas mensais de R$ 44,90 (QUARENTA E QUATRO REAIS E NOVENTA CENTAVOS).</p>

                <p>
                    B) A forma de pagamento será através de método de pagamento
                    disponibilizado no site
                    da CONTRATADA, com as opções de "pagamento em 12x no cartão"
                    ou "pagamento recorrente".
                </p>

                <p>
                    C) *Promoções e descontos estarão disponíveis para
                    visualização no site da CONTRATADA, caso houver.
                </p>

                <p>
                    D) Após a confirmação de pagamento daremos início ao projeto
                    contratado.
                </p>

                <h3>CLÁUSULA 3º: DO OBJETIVO DO CONTRATO</h3>

                <p>O presente contrato tem como objeto a formulação do conjunto de
                preenchimento e otimzação do cadastro nos serviços do Google, aqui denominado simplesmente por
                 “Google Meu Negócio", com referências institucionais do CONTRATANTE, demonstrando os seus produtos, 
                 serviços, contatos e avaliações.
                </p>

        

               <h3>CLÁUSULA 4º: DAS OBRIGAÇÕES DO CONTRATADA</h3> 

               <p>A) A CONTRATADA se compromete a desenvolver o objeto deste contrato
                conforme o plano escolhido e contratado pelo cliente em nosso site, de maneira
                mais adequada e dinâmica, dando ênfase a marca e a qualidade dos produtos e serviços da
                CONTRATANTE.</p>
                
                <p>B) Utilizar recursos que facilitem a loacalização do negócio do CONTRATANTE na plataforma do Google.</p>
                
                <p>C) Seguir o cronograma cumprindo o tempo de entrega do projeto.
                Não será de
                responsabilidade da CONTRATADA caso o projeto atrase a entrega,
                devido o COPNTRATANTE faltar
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
                     </ol>

  
                <h3>CLÁUSULA 5º: DAS OBRIGAÇÕES DO CONTRATANTE</h3>
                     <p>Ficará sobre responsabilidade da CONTRATANTE, a entrega de todo
                o material necessário
                para execução dos trabalhos ora solicitados via briefing, tais
                como:</p>
                  <ul>
                    <li>Fotos e imagens a serem adicionadas na ficha;</li>
                    <li>Textos descritivos;</li>
                    <li>Logotipo;</li>
                    <li>Toda e qualquer informação adicional</li>
                  </ul>      


                <h3>CLÁUSULA 6º: É VEDADO AO CONTRATANTE:</h3>

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
                    <li>Disponibilizar ou armazenar nos servidores do Google
                qualquer material lesivo
                ou atentatório à ética, aos bons costumes, à convivência social,
                material considerado
                lesivo aos visitantes
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
                    <li>À CONTRATADA caberá avaliar o que constitui violação dessas
                medidas.</li>
                    <li>Nenhum material ou conteúdo do site do CONTRATANTE poderá
                conter finalidade
                (objetiva ou subjetiva) ofensiva ou discriminatória, seja em
                natureza de sexo, raça, cor,
                religião, nacionalidade, credo, naturalidade, gênero ou de
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
                citadas, a ficha será retirada do ar, e o contrato sumariamente
                cancelado, sem direito a reembolso dos valores pagos.</li>
                </ol>


                <h3>CLÁUSULA 7º: DA RESCISÃO DO CONTRATUAL</h3>

                <p>A) Caso o CONTRATANTE venha a rescindir, desistir ou cancelar o
                serviço contratado
                objeto do presente instrumento após o início da prestação do
                serviço e do seu
                desenvolvimento, o CONTRATANTE fica ciente de que não ocorrerá a
                devolução de qualquer valor por parte da CONTRATADA.</p>

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
                    dias) para desistir do seu contrato, onde não será cobrado nenhum tipo de multa rescisória.
                Todos os dados, imagens e otmizações realizados até então, serão removidos, uma vez que houve desistência 
                do CONTRATANTE na prestação dos serviços. </p>


                <h3>CLÁUSULA 8º: PRAZO DE VIGÊNCIA DO PRESENTE CONTRATO</h3>

                <p>O presente contrato vigorará por um prazo determinado de 30 (trinta)
                dias, podendo ser renovado ao seu final, mantendo as
                mesmas disposições.
                Após o final do contrato, o cliente pode optar por ter uma
                renovação mensal automática, onde, a partir daí, o contrato pode
                ser cancelado a qualquer momento, sem ônus adicionais.</p>
                <p>Fica a critério do CONTRATANTE se manterá os serviços de forma mensal ou poderá negociar diretamente
                    com a CONTRATADA questões pontuais de atualização da ficha.
                </p>


                <h3>CLÁUSULA 9º: DISPOSIÇÕES GERAIS</h3>

                <p>A) Nesta proposta encontra-se prevista a implementação da otimização da ficha do Google Meu Negócio
                    assim como o upload de imagens e preenchimento dos dados do cliente. Também será gerado um site 
                    (nos servidores do Google) com informações da empresa.</p>          

                <p>B) O CONTRATANTE está ciente de que a CONTRATADA somente
                realizará os itens do
                Google Meu Negócio de acordo com os itens do seu plano contratado,
                conforme constam neste
                contrato. Qualquer pedido adicional será analisado pela
                CONTRATADA, e caso seja
                possível atender o pedido será cobrado separadamente tratando-se
                como uma
                “Customização adicional ao plano”, com isso será enviado um
                orçamento ao
                CONTRATANTE, o mesmo será desenvolvido caso seja aprovado
                mediante ao orçamento.</p>
                


                <h3>CLÁUSULA 10º: DA ELEIÇÃO DE FORO</h3>
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
                <p>Porto alegre, <?=$data?>.</p>
                
            </div>

        </main>

        <div class="m-5">&nbsp;</div>



        <footer class="py-4 bg-dark">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-light">Logado como: <?=$cliente->getNome()?></div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>



    </body>

    </html>
<?php
} else {
    header('Location: ../../index.php');
}
?>