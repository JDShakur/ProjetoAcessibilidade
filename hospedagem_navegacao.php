<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>PortalSr</title>
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
    <div class="Acess">
      <a href="#Conteudo" class="Acess">Pular o menu de navegação é ir Direto para o conteúdo da navegação da aba hotel</a>
    </div>
    <?php 
      include("includes/header.php");
    ?>

    <main>
        <article id="Conteudo">
          <h1>Hospedagem</h1>
            <p>Certamente você já pensou que ao visitar uma cidade, simplesmente era impossível planejar um cronograma para aproveitar todas as atrações e pontos turísticos num único dia, certo? Confira algumas opções de hospedagem para aumentar a sua estadia e aproveitar cada momento ao máximo nas atrações de São Roque.</p>
            <a class="pb-3 text-primary display-6 decor" href="./hospedagem_hoteis.php">Hotéis</a>
              <p>Os melhores e mais confortáveis hotéis da cidade estão a sua disposição, oferecendo uma variedade de opções para você possa escolher a melhor localização para se acomodar e aproveitar as redondezas com acesso fácil e rápido.</p>
                    
            <a class="pb-3 text-primary display-6 decor" href="./hospedagem_alugar.php">Aluguéis</a>
              <p>Prefere algo mais reservado, ou talvez, com mais espaço para a família e os amigos? Veja alguns imóveis, casa, chácara ou apartamento para alugar por temporada, e aproveitar o conforto de um espaço mais privativo. </p>
                    
            <a class="pb-3 text-primary display-6 decor" href="hospedagem_camping.php">Camping</a>
              <p>Para aqueles que querem se desprender um pouco do ambiente urbano, há também a opção de acampar nos arredores da cidade. Conheça os acampamentos e suas instalações, e comece a planejar sua próxima aventura.</p>
        </article>
    </main>

    <?php 
      include("includes/footer.php")
    ?>
</body>
</html>