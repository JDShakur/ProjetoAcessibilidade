<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Estação Ferroviaria</title>
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
        <a href="#Conteudo" class="Acess">Pular o menu de navegação é ir Direto para o conteúdo atrações turisticas estação ferroviária</a>
    </div>
    <?php 
        include("includes/header.php");
    ?>

    <main>
      <article id="Conteudo">
          <figure>
            <img src="imagens/Estacao.webp.jpeg"  alt="A imagem mostra uma locomotiva a vapor antiga e seus vagões estacionados ao lado de uma plataforma de embarque. A locomotiva é de cor preta com detalhes em branco e cinza, exibindo as características rodas grandes e a chaminé proeminente típicas das antigas locomotivas a vapor. A plataforma de embarque possui um longo abrigo com uma cobertura que se estende ao longo da via férrea, com pilares e um piso de ladrilhos. A grama verde cortada rente ao trilho acrescenta um toque de natureza à cena. O céu está claro, indicando um dia ensolarado.">
          </figure>
          <h1>Estação Ferroviaria São Roque</h1>
          <p>Construída em 1930, teve como um de seus acionistas Antônio Joaquim
            Rosa, foi um marco importante para o desenvolvimento da cidade e de
            toda região. Porem está desativada desde 1999, desde então, a
            estação ferroviária tornou-se uma das principais atrações da cidade,
            com destaques a arquitetura antiga e os trilhos de ferro que chamam
            bastante atenção. Atualmente recebe inúmeros turistas e o prédio
            também abriga a Guarda municipal de São Roque. Com uma das vistas
            mais privilegiadas de todo o território são roquense, o Morro do
            Cruzeiro fica a poucos metros da estação ferroviária e é lá que se
            encontra também a imagem do santo padroeiro da cidade, São Roque e
            também a famosa cruz da cidade. Entre os meses de julho a agosto,
            este local é o destino de vários devotos que realizam novenas ao
            santo da cidade.
          </p>
          <p>Autor: José Vinícius Fernandes dos Santos<br>Data: 16/05/2023</p>
      </article>
    </main>
    
    <?php 
      include("includes/footer.php")
    ?>
  </body>
</html>
