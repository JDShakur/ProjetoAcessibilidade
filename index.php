<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>PortalSr</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!--Link css bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Link Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <!--Css master-->
  <link rel="stylesheet" href="css/style.css">

  <!--Link Js Bootstrap-->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>

<body>
  <div class="Acess">
    <a href="#Conteudo" class="Acess">Link para ir direto para o conteúdo principal da página</a>
  </div>
  <?php
  include("includes/header.php");
  ?>

  <main>
    <article id="Conteudo" class="container pb-3">
      <img class="w-100 img-fluid shadow-lg rounded" src="imagens/imgprin.webp" alt="Imagem que mostra o portal da entrada de são roque, uma construção grande com lajes roxas e paredes brancas, abaixo dela tem um escrito dizendo 'Bem Vindos a São Roque'" />
      <div class="text-justify  pt-4">
        <p>
          Bem vindos ao nosso portal da cidade de São Roque! Aqui você
          encontrará o que é mais belo e atrativo na cidade.
        </p>
        <p>
          Aqui você encontrará os melhores restaurantes, hotéis, opções de
          turismo e mais. Aprenderá sobre nossa rica história, curiosidades da
          cidade e eventos que ocorrem quase que diariamente!
        </p>
      </div>
      <div class="container align-baseline pb-4">
        <div class="row">
          <hr class="border border-dark border-3 m-3">
          <h1>Conheça Nossa Cidade!</h1>
          <p class="lead col-md-7 col-sm-12 pe-3">
            Com uma rica história e muitas atrações turisticas para oferecer, São
            Roque, uma das maiores cidades do interior de São Paulo, Mostra que
            Não é necessário ir para muito longe para se obter diversão.
          </p>
          <img  src="imagens/sunrock.webp" class="float-end img-fluid col-md-5 col-sm-12 rounded-3 shadow-lg" alt="A imagem é uma fotografia noturna que mostra um letreiro tridimensional escrito SÃO ROQUE, com as letras em branco montadas sobre uma base. À esquerda do letreiro, há uma estrutura metálica em forma de coração entrelaçado com uma planta, ambas em tons de roxo e verde, que parecem fazer parte do letreiro." />
          <p>
            Com diversos pontos turisticos e uma vasta opção de restaurantes e
            pousadas, A cidade se destaca também por sua hospitalidade, trazendo
            para todos os aqueles que visitam um certo ar de tranquilidade e
            beleza.
          </p>
        </div>

        <p>
          Esse portal foi feito para demostrar um pouco dessa variedade
          multifacetada de São Roque, desde sua história até os pontos
          turísticos mais badalados.
        </p>
      </div>
    </article>

    <aside class="container align-baseline pb-4">
      <h1>Galeria de Fotos</h1>
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
          <img class="w-100 shadow-lg col-lg-auto col-md-4 col-sm-3 rounded mb-4 img-fluid " src="imagens/sunrock.webp" alt="A imagem é uma fotografia noturna que mostra um letreiro tridimensional escrito SÃO ROQUE, com as letras em branco montadas sobre uma base. À esquerda do letreiro, há uma estrutura metálica em forma de coração entrelaçado com uma planta, ambas em tons de roxo e verde, que parecem fazer parte do letreiro." />
          <img src="imagens/brasital.webp" class="w-100 shadow-lg col-lg-auto col-md-4 col-sm-3 rounded mb-4" alt="Conjunto arquitetônico histórico sob um céu azul parcialmente nublado. Em primeiro plano, destaca-se uma grande chaminé de tijolos aparentes, estreitando-se em direção ao topo e inclinando-se ligeiramente. Ao fundo, há edificações com um design colonial, pintadas em amarelo, com detalhes em branco. As janelas das construções são arqueadas, e há vegetação discreta ao redor, o que sugere que o local pode ser uma área preservada ou um ponto de interesse histórico." />
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
          <img src="imagens/coisanova.webp" class="w-100 shadow-lg col-lg-auto col-md-4 col-sm-3 rounded mb-4" alt="Uma estrutura de madeira que parece ser parte de uma área de lazer ou descanso localizada no centro de São Roque. A estrutura é composta por um pergolado de madeira com bancos também de madeira integrados, criando um espaço acolhedor para sentar e relaxar. Há vasos de plantas em volta, contribuindo para a atmosfera convidativa e verde do local. Ao fundo, percebe-se o ambiente urbano com iluminação noturna." />
          <img src="imagens/igreja.webp" class="w-100 shadow-lg col-lg-auto col-md-4 col-sm-3 rounded mb-4" alt="A imagem mostra o interior da Igreja Matriz de São Roque. O altar ao fundo é adornado com imagens sacras, flores e detalhes dourados. Há uma estátua de um santo de pé à esquerda, e a nave da igreja é ladeada por bancos vermelhos para os fiéis. A decoração é clássica e solene, a ciam do altar está a imagem do padroeiro São Roque." />
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="imagens/largodosmendes.webp" class="w-100 shadow-lg col-lg-auto col-md-4 col-sm-3 rounded mb-4" alt="A imagem mostra uma cena noturna do Largo dos Mendes em São Roque. Há um quiosque de estrutura de madeira com um telhado de telhas, típico de áreas de lazer públicas. O local está iluminado por luzes de rua, que lançam um brilho suave sobre a área e realçam o verde das árvores circundantes. A área parece ser um espaço tranquilo e convidativo, com bancos e caminhos para pedestres, ideal para passeios noturnos." />
          <img src="imagens/trein2.webp" class="w-100 shadow-lg col-lg-auto col-md-4 col-sm-3 rounded mb-4" alt="A fotografia mostra uma locomotiva a vapor antiga, de cor preta, em uma estação de trem com plataformas cobertas por telhados de metal suportados por colunas. A locomotiva possui rodas grandes e características clássicas de design de trens do início do século XX, como um farol redondo na frente e uma chaminé robusta." />
        </div>

      </div>
    </aside>

    <section class="container align-baseline">
      <h1 class="text-center pb-3">O que os visitantes pensam</h1>
      <div class="row justify-content-center ">
        <div class="card me-md-5 text-black col-md-4 col-sm-12 col-xl-auto mb-4 p-3 border-0 shadow-lg" style="width: 18rem;">
          <img src="imagens/arnold.jpg" class="card-img-top img-fluid rounded-circle w-50" alt="Foto de um comentárista do site">
          <div class="card-body">
            <h5 class="card-title">Arnold</h5>
            <p class="card-text">"De todas as Cidades deste Brasilzão, esta é a que eu mais me sinto confortável de estar.
              O Clima, os vinhos e a hospitalidade da cidade é algo único"</p>

          </div>
        </div>
        <div class="card me-md-5 text-black col-md-4 col-sm-12 col-xl-auto mb-4 p-3 border-0 shadow-lg" style="width: 18rem;">
          <img src="imagens/bob.webp" class=" w-50 card-img-top img-fluid rounded-circle" alt="Foto de um comentárista do site">
          <div class="card-body">
            <h5 class="card-title">Bob Ross</h5>
            <p class="card-text">"São Roque lembra muitas cidades pequenas e charmosas pelo Brasil, vale conhecer, ainda mais pra quem curte gastronomia e vinho."</p>

          </div>
        </div>
        <div class="card me-md-5 text-black col-md-4 col-sm-12 col-xl-auto mb-4 p-3 border-0 shadow-lg" style="width: 18rem;">
          <img src="imagens/the wok.webp" class="w-50 card-img-top img-fluid rounded-circle" alt="Foto de um comentárista do site">
          <div class="card-body">
            <h5 class="card-title">The Wok</h5>
            <p class="card-text">"Um lugar muito bonito!
              Com um belo dia de sol, no fim de tarde, tudo por lá fica ainda mais bonito.
              Instagramável, proporciona ótimas fotos. Vinhos muito bons, para todos os gostos. Ambiente ideal para famílias e casais.".</p>

          </div>
        </div>

      </div>

    </section>
  </main>

  <?php
  include("includes/footer.php")
  ?>
</body>

</html>