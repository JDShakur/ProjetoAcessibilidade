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
        <a href="#Conteudo" class="Acess">Pular o menu de navegação é ir Direto para a navegação da aba De restaurantes de São Roque</a>
    </div>
    <?php 
        include("includes/header.php");
    ?>

    <main>
        <article id="Conteudo">
            <figure>
                <img src="imagens/img-gastro.webp" alt="A imagem mostra um close-up de uma pessoa cozinhando macarrão espaguete, podemos ver o vapor subindo, indicando que a comida está quente. A cena captura o movimento e a textura do macarrão, bem como detalhes como os ingredientes adicionais no prato, que parecem ser legumes.">
            </figure>
            <h2>Gastronomia</h2>
            <p>São Roque é conhecida pela sua rica gastronomia que é um verdadeiro tesouro para os amantes da boa comida e da cultura local. A cidade oferece uma experiência única para os visitantes que buscam saborear pratos deliciosos e descobrir novos sabores e ingredientes pois existe uma combinação de pratos típicos da culinária brasileira com influências de imigrantes italianos, portugueses e japoneses que se estabeleceram na região. Um dos ingredientes mais tradicionais da culinária local é a alcachofra, que é muito valorizada pelos seus sabores e propriedades nutricionais.</p>
        </article>
    
        <section class="bg-light py-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 shadow">
                            <figure>
                                <img class="card-img-top" src="imagens/imggastro1.webp"
                                alt="A imagem apresenta uma composição culinária disposta sobre uma superfície de madeira rústica, sugerindo a preparação de uma refeição italiana. Há uma tigela com molho de tomate, queijo ralado fino ao lado, e alguns tomates cereja frescos espalhados. Também aparecem folhas de manjericão verde, alho e grãos de pimenta preta, que adicionam cor e textura à cena.">
                            </figure>
                            <div class="card-body">
                                <h3 class="card-title">Culinária</h3>
                                <p class="card-text">Richard McClintock, a Latin professor at Hampden-Sydney College in
                                    Virginia, looked up one of the more obscure Latin words, consectetur.</p>
                                <a href="gastronomia_culinaria.php" class="btn btn-primary border-0">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="card mb-4 shadow">
                            <figure>
                                <img class="card-img-top" src="imagens/imggastro.webp"
                                    alt="A imagem mostra uma mesa de jantar elegante em um restaurante. A mesa é longa e retangular possui lugares para várias pessoas. Os lugares estão bem arrumados com talheres, pratos, copos e guardanapos. As cadeiras ao redor da mesa são de um design moderno e acolchoadas para conforto. O ambiente sugere um estabelecimento sofisticado, possivelmente um restaurante de alta gastronomia.">
                            </figure>
                            <div class="card-body">
                                <h3 class="card-title">Os restaurantes em São Roque</h3>
                                <p class="card-text">Richard McClintock, a Latin professor at Hampden-Sydney College in
                                    Virginia, looked up one of the more obscure Latin words, consectetur.</p>
                                <a href="gastronomia_restaurante.php" class="btn btn-primary border-0">Saiba Mais</a>
                            </div>
                        </div>
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
