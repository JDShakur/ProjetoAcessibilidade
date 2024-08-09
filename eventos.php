<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Eventos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!--Link css bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Link Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <!--Css master-->
  <link rel="stylesheet" href="css/style.css">

  <!--Link Js Bootstrap-->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</head>

<body>
    <div id="Conteudo" class="Acess">
        <a href="#Eventos" class="Acess">Clique para ir deireto para o conteudo de eventos</a>
    </div>
    <?php 
        include("includes/header.php");
    ?>

    <div class="row">
        <hr class="border border-primary w-50 border-5 border-opacity-100  p-0 m-0 col-6">
        <hr class="border border-info w-50 border-5 border-opacity-100 p-0 m-0 col-6">
    </div>
    <div>
        <div class="container-fluid bg-black bg-gradient">
            <div class="row pb-3">
                <div class="col  py-5 ">
                    <h2 class="fs-1 fw-bold  ">
                        <span class="text-primary ">Agenda</span>
                        <span class="text-white">de</span>
                        <span class="text-info "> Eventos</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <hr class="border border-info w-50 border-5 border-opacity-100 p-0 m-0 col-6">
        <hr class="border border-primary w-50 border-5 border-opacity-100  p-0 m-0 col-6">
    </div>
    <article id="Eventos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="Event Event-1 accordion col-md-9 col-xl-11 " id="Accordion1">
                    <div class="accordion-item ">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bolder fs-1
                                    text-light" type="button" data-bs-toggle="collapse" data-bs-target="#b1" aria-expanded="true" aria-controls="b1">
                                Fatecon
                            </button>
                        </h2>
                        <div id="b1" class="accordion-collapse
                                collapse show" data-bs-parent="#Accordion1">
                            <div class="accordion-body">
                                <img src="imagens/povofatecon-min.webp" class="img-fluid p-1 col-md-5 float-md-start me-3 shadow-lg  mb-5 bg-body rounded-1" alt="Fatecon Feira de quadrinhos">
                                <p class="lead">A Segunda edição do maior evento de
                                    quadrinhos no interior de São Paulo, A
                                    Fatecon idealizado pelo Professor e
                                    Historiador Rubens Menezes, reune os
                                    maiores nomes dos quadrinhos nacionais
                                    trazendo não só a exposição e vendas dos
                                    quadrinhos como também
                                    concurso de cosplay, bate-papo com os
                                    quadrinistas e mais. </p>
                                <p>
                                    Venha se aventurar no mundo mágico dos quadrinhos nos dias 12 e 13 de maio no
                                    recanto da cascata.
                                </p>
                                <p>
                                    <small>Mais informações em <a class="EventLink" href="https://fateconhqs.com.br">Fatecon, Site oficial.</a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="Event Event-2 accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-1
                                    text-light" type="button" data-bs-toggle="collapse" data-bs-target="#b2" aria-expanded="false" aria-controls="b2">
                                Festa de Agosto
                            </button>
                        </h2>
                        <div id="b2" class="accordion-collapse
                                collapse" data-bs-parent="#Accordion1">
                            <div class="accordion-body">
                                <img src="imagens/festa-min.webp" alt="Pessoal reunido na frente da igreja da matriz" class="img-thumbnail col-12 mb-3 shadow-lg">
                                <p>
                                    O Evento mais famoso de São Roque é
                                    justo aquele que comemora o aniversário
                                    da cidade. Ocorre nos dias 4 a 16 de
                                    agosto, o Festival conta com
                                    apresentações, feiras de diversos tipos
                                    e missas na igreja da matriz.
                                </p>
                                <p>
                                    São mais de 10 dias de eventos musicais, eventos religiosos, apresentações artisticas e muita variedades de comidas, tanto comidas de rua quanto pratos tipicos, promovidos pelos quiosques de restaurantes famosos da cidade.
                                </p>
                                <p>Assim, a Festa do Aniversário de São Roque é um evento marcante que une tradição, cultura, gastronomia e celebração, destacando o orgulho e a alegria de viver nessa cidade encantadora. É uma ocasião especial para todos aqueles que têm a oportunidade de participar e vivenciar a energia contagiante dessa festa.</p>
                                <p>Assim, a Festa do Aniversário de São Roque é um evento marcante que une tradição, cultura, gastronomia e celebração, destacando o orgulho e a alegria de viver nessa cidade encantadora. É uma ocasião especial para todos aqueles que têm a oportunidade de participar e vivenciar a energia contagiante dessa festa.</p>

                            </div>
                        </div>
                    </div>
                    <div class="Event Event-3 accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-1
                                    text-light" type="button" data-bs-toggle="collapse" data-bs-target="#b3" aria-expanded="false" aria-controls="b3">
                                Sakura Matsuri
                            </button>
                        </h2>
                        <div id="b3" class="accordion-collapse
                                collapse" data-bs-parent="#Accordion1">
                            <div class="accordion-body">
                                <img src="imagens/sakura-min.webp" alt="" class="img-fluid p-1 col-md-5 float-md-start me-3 shadow-lg  mb-5 bg-body rounded-1 w-md-50">
                                <p class="lead">O famoso festival do florescer das
                                    cerejeiras agora em São Roque.
                                    Localizado na estrada do Carmo, o centro de Cultura japonesa Bunkyo, anualmente
                                    realiza o festival do florescer das cerejeiras, abrindo o espaço para o público. </p>

                                <p class="lead">
                                    O festival Ocorre nos dias 1,2,8 e 9 do
                                    mês de julho, a entrada é gratuita para
                                    pedestres, já o estacionamento é pago.
                                </p>

                                <p class="lead">
                                    O festival conta com feiras
                                    tipicas,vendas de brotos cerejeiras,
                                    shows e apresentações sobre a cultura
                                    japonesa

                                </p>



                                <small>mais informações no: <a class="EventLink" href="https://www.bunkyo.org.br/br/" target="_blank">Site oficial</a> </small>
                            </div>
                        </div>

                    </div>
                    <div class="Event Event-4 accordion-item ">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-1
                                    text-light" type="button" data-bs-toggle="collapse" data-bs-target="#b4" aria-expanded="false" aria-controls="b4">
                                Festival de Jazz
                            </button>
                        </h2>
                        <div id="b4" class="accordion-collapse
                                collapse" data-bs-parent="#Accordion1">
                            <div class="accordion-body">
                                <img src="imagens/DoULikeJazz.webp" alt="Logo do show de jazz de são roque" class="img-fluid p-1 col-md-5 float-end ms-3 shadow-lg rounded-1 ">
                                <p class="lead">Nos dias 19 21/05 e 26 a 28/5 Venha celebrar a música mais suave e
                                    envolvente de todos os tempos! Apresentamos o Festival de Jazz, em uma noite
                                    inesquecível de harmonia e improvisação. Não perca essa oportunidade única de
                                    mergulhar na atmosfera única do jazz, com ritmos contagiantes, melodias envolventes
                                    e solos memoráveis. Junte-se a nós para uma noite de música sofisticada e refinada
                                    desse gênero musical fascinante.
                                </p>
                                <p>
                                    <small>mais informações em: <a class="EventLink" href="https://www.informasaoroque.com.br/informasaoroque/2023/05/08/festival-de-jazz-volta-a-sao-roque-em-maio-com-grandes-atracoes/" target="_blank">InformaSãoRoque</a></small>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="Event Event-5 accordion-item mb-5">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-1
                                    text-light" type="button" data-bs-toggle="collapse" data-bs-target="#b5" aria-expanded="false" aria-controls="b5">
                                Oktoberfest
                            </button>
                        </h2>
                        <div id="b5" class="accordion-collapse
                                collapse pb-md-5" data-bs-parent="#Accordion1">
                            <div class="accordion-body">
                                <img src="imagens/oktoober.webp" alt="Logo oktoberfest" class="col-md-6 col-sm-12 float-start  m-md-3 my-sm-3 rounded shadow-lg">
                                <p class="lead">A primeira edição da Oktoberfest São roque. Acontecerá na vila Don Patto
                                    no dia 19/10 do 12:00 até 00:00, localizada na estrada do vinho. Haverá cervejas

                                    premiadas da <em>BAMBERG</em> onde teremos opções a 5 tipos especiais de cerveja.
                                    Diversas comidas tipicas da culinária alemã, pizzas, hamburguers e pratos especiais
                                    do quiosque Don Patto.
                                    O evento contará com shows ao vivo de 4 bandas tocando rock, pop, blues e muito
                                    mais.
                                </p>



                                <p>
                                    <small>para mais informações os acompanha pelo <a class="EventLink" href="https://www.facebook.com/oktobersaoroque/" target="_blank">facebook
                                            oficial</a></small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </article>

    <?php include("./includes/footer.php"); ?>

</body>

</html>