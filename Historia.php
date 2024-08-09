<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>História</title>
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
    <script defer src="js/jdscode.js"></script>
</head>


<body>
    <div  class="Acess">
        <a href="#Conteudo" class="Acess" onclick="mostrar_modal()">Clique para ir direto para o conteúdo de história,ou de tab para seguir para o próximo</a>
        <a href="#Conteudo" class="Acess" onclick="mostrar_modal_2()">Clique para ir direto para o conteúdo de curiosidades</a>
    </div>
    <?php 
        include("includes/header.php");
    ?>
 
    <article id="Conteudo">
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-auto mb-5">
                    <div class="PersonaCard">
                        <div class="CardContent">
                            <h1 class="CardTitulo">História</h1>
                            <p class="CardBody">Conheça um pedaço da nossa história!!</p>
                            <a href="#" onclick="mostrar_modal()">
                                <img src="imagens/sunrock2.webp"
                                    alt=" Clique para Ler o conteudo De Historia. A imagem é uma fotografia em preto e branco que exibe uma instalação de letras tridimensionais formando as palavras SÃO ROQUE. As letras grandes estão posicionadas sobre o que parece ser um canteiro com vegetação, em frente a um edifício. Que é a entrada da cidade São Roque,clique para que abra o modal historia"
                                    class="img-fluid col-md-3 col-sm-12  Img-Hoo border border-4 border-dark-subtle w-50 ">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-auto ">
                    <div class="PersonaCard2 ">
                        <div class="CardContent">
                            <h1 class="CardTitulo">Curiosidades</h1>
                            <p class="CardBody">Algumas curiosidades da terra do vinho</p>
                            <a href="#" onclick="mostrar_modal_2()">
                                <img src="imagens/trein-min.webp"
                                    alt="Clique para Ler o conteudo de Curiosidades.  A imagem é uma fotografia em preto e branco que mostra uma locomotiva a vapor antiga, de cor preta, em uma estação de trem com plataformas cobertas por telhados de metal suportados por colunas. A locomotiva possui rodas grandes e características clássicas de design de trens do início do século XX, como um farol redondo na frente e uma chaminé robusta."
                                    class="img-fluid col-md-3 col-sm-12  Img-Hoo border border-4 border-dark-subtle w-50">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>



    <!--modal 1-->
    <div class="modal fade" tabindex="-1" id="minha_caixa" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="Historia">

                <div class="modal-header">
                    <h5 class="modal-title">História de São Roque</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body text-center">
                    <h1>História de São Roque</h1>
                    <p>De uma pequena vila rural a uma das maiores instâncias turísticas do estado.</p>
                </div >
                    <div class=" m-3 p-2">
                        <img src="imagens/sunrock.webp" alt="A imagem é uma fotografia em preto e branco que exibe uma instalação de letras tridimensionais formando as palavras SÃO ROQUE. As letras grandes estão posicionadas sobre o que parece ser um canteiro com vegetação, em frente a um edifício. Que é a entrada da cidade São Roque." class="img-fluid col-12 pb-3 rounded">
                        <p>
                            São Roque é uma cidade localizada no estado de São Paulo, a cerca de 60 km da capital pela rodovia Raposo Tavares,
                            São Paulo. Fundada em 16 de agosto de 1657, é uma das cidades mais antigas do estado de São Paulo e possui uma riquíssima história.
                        </p>
                        <p>
                            Os primeiros habitantes da região foram os índios guaianazes, que viviam da caça, pesca e coleta de
                            frutos. Com a chegada dos colonizadores portugueses, os índios foram sendo mortos, expulsos de suas terras e ou
                            escravizados.
                        </p>
                        <p>
                            Em 1657, o bandeirante Pedro Vaz de Barros, fundou um pequeno povoado
                            na região, religioso, chamou a cidade de São Roque em homenagem ao santo que era devoto. A partir daí, a
                            cidade começou a se desenvolver e a atrair novos moradores.
                        </p>
                        <p>
                            Mais tarde com a nescesidade de mais mão de obra, Os lavradoures recorreram a mão de obra escravos africanos(Há decendentes diretos de ex-escravos no bairro do carmo, onde antigamente era possivel visitar a senzala e a casa grande do senhorio daquela época), um reforço triste que possibilitou à vila ampliar sua lavroura e amplifica-la.
                        </p>
                        <p>
                            Durante o período colonial, São Roque se destacou pela produção de vinho e aguardente, que eram
                            exportados para outras regiões do Brasil e até mesmo para a Europa. A cidade também teve um
                            importante papel na produção de seda, que foi introduzida na região pelos imigrantes japoneses (esse nos quais se beneficiaram muito da posição geográfica da cidade, As familias mais tradicionais possuem patrimônios por toda a cidade) no
                            início do século XX. Contando com a antiga fábrica onde hoje é conhecida como Brasital, São Roque possuia uma grande potêncial de industrialização antes de se tornar instância turística.
                        </p>
                        <p>
                            Ao longo dos anos, São Roque passou por diversas transformações e atualmente é uma cidade turística,
                            que atrai visitantes de todo o país. A cidade é conhecida por suas vinícolas, que oferecem
                            degustações de vinhos e visitas guiadas, e também por seus parques e áreas de preservação ambiental.
                        </p>
                        
                    </div>

                <div class="modal-footer">
                    <button class="btn btn-outline-success" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!--/modal 1-->

    <!--modal 2-->
    <div class="modal fade" tabindex="-1" id="minha_caixa_2" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="Curiosidades">

                <div class="modal-header ">
                    <h5 class="modal-title">Curiosidades</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body text-center">
                    <h2>Curiosidades</h2>
                    <p>Alguns fatos interessantes sobre a cidade de São Roque</p>
                
                <img src="imagens/bandeira sr.webp" alt="Imagem da bandeira do município de São Roque, em São Paulo, Brasil. O fundo é branco com uma cruz de Malta em preto e vermelho, que divide a bandeira em quatro partes iguais. No centro, há um brasão detalhado. O escudo é cercado por ramos de café à esquerda e uvas à direita, ambos ligados por uma faixa com a inscrição MEA PAULISTA GENS. Acima do brasão, há uma coroa mural típica dos brasões municipais." class="img-fluid px-3 w-75">
                    <ul>
                        <li class="mt-3">Estância Turística: São Roque recebeu o título de Estância Turística em 1990, o que destaca sua importância como destino turístico e reconhece seus atrativos naturais e culturais.</li>
                        <li class="mt-3">Rota do Vinho: São Roque é conhecida como a "Terra do Vinho" devido à sua tradição na produção de vinhos e vinhedos. A cidade abriga a famosa Rota do Vinho, onde os visitantes podem explorar vinícolas, degustar vinhos, desfrutar de belas paisagens e aprender sobre o processo de produção do vinho.</li>
                        <li class="mt-3">Adegas históricas: A cidade possui algumas adegas históricas que datam do século XIX. A Adega de São Roque, por exemplo, é uma das mais antigas do Brasil.</li>
                        <li class="mt-3">Arquitetura histórica: A cidade preserva belos exemplares de arquitetura histórica, como o Casarão da Fazenda Bela Vista, construído no século XIX, que hoje abriga o Museu do Vinho.</li>
                        
                        <li class="mt-3">Museu do Vinho: O Museu do Vinho é um importante ponto turístico de São Roque. O museu apresenta a história da vitivinicultura na região, exibe ferramentas e equipamentos utilizados na produção de vinho, além de oferecer degustações e exposições temáticas.</li>
                        <li class="mt-3">Ski Mountain Park: São Roque abriga o Ski Mountain Park, um parque de diversões que oferece atividades como esqui na neve artificial, tirolesa, arvorismo e tobogã. É um destino popular para quem busca diversão ao ar livre.</li>
                       
                        <li class="mt-3">Festas e eventos: São Roque é palco de diversas festas e eventos ao longo do ano. Destacam-se a Festa de São Roque, que celebra o padroeiro da cidade, e a Festa do Vinho, que promove a cultura vitivinícola da região.</li>
                        <li class="mt-3">Turismo rural: Além dos vinhedos, São Roque oferece opções de turismo rural, com propriedades que produzem queijos, compotas, doces e outros produtos artesanais. Os turistas têm a oportunidade de conhecer esses locais e vivenciar a vida no campo.</li>
                        <li class="mt-3">Ecoturismo: A região de São Roque possui belas paisagens naturais e é um destino ideal para os amantes do ecoturismo. Há trilhas, cachoeiras e áreas de preservação ambiental que podem ser exploradas pelos visitantes.</li>
                        
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-success" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!--/modal 2-->





    <?php include("./includes/footer.php"); ?>

</body>

</html>