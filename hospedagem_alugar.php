<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Centro Educacional e Cultural Brasital</title>
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
      <a href="#Conteudo" class="Acess">Pular o menu de navegação é ir Direto para o conteúdo de Alugueis em São Roque</a>
    </div>
    <?php 
      include("includes/header.php");
    ?>

  <main id="Conteudo">
    <article>
      <h1>Hospedagem</h1>

      <section>    
              <h2>Imóveis para alugar</h2>
              <p >Confira opções de imóveis disponíveis para alugar. Desde chácaras, até dormitórios individuais como opções mais econômicas.</p> 
      </section>

      <section>
        <h3>Chácaras</h3>
          <img src="imagens/hospedagem/chacara.webp" alt="A imagem mostra uma piscina retangular de água azul clara ao ar livre, com um escorregador azul claro na extremidade direita. Ao redor da piscina há um deck de pedra e várias espreguiçadeiras brancas. Atrás da piscina, há uma casa. A área é cercada por vegetação densa e bem cuidada, e ao fundo, pode-se ver uma encosta com mais vegetação.">
          <p>Uma opção muito atraente e que irá proporcionar grande conforto e privacidade na sua estadia, são as belas chácaras pela cidade. O ambiente tranquilo e a presença de área verde que são características da cidade, favorecem para imóveis agradáveis que irão acolher toda a família e amigos.</p> 
      </section>

      <section>
        <h3>Imóveis</h3>
          <img src="imagens/hospedagem/imovel.webp" alt="A imagem mostra uma cozinha com um estilo moderno e minimalista. À esquerda, há uma janela grande que permite a entrada de luz natural e oferece uma vista de uma parede de tijolos aparentes do lado de fora. No centro, há uma televisão presa em uma estante de madeira que combina com o tom dos armários da cozinha. À direita, observa-se uma bancada de cozinha com um fogão a gás e uma pia, ambos incorporados em uma superfície escura que contrasta com os azulejos brancos da parede e os armários claros acima.">
          <p>Para quem procura apenas um imóvel que seja mais reservado, porém não precisa de algo muito extenso, existem muitas opções de residências  e apartamentos para uma família, ou um grupo de amigos.</p> 
      </section>

      <section>
        <h3>Albergue</h3>
          <img src="imagens/hospedagem/hostel.webp" alt="Foto de um quarto com cabeceira de cama de casal.">
          <p>Já para quem busca por opções mais econômicas, ou gosta de viajar sozinho e não precisa de imóveis com muito espaço, há a opções de hostel, com instalações mais simples e acomodações individuais, mas com preços mais acessíveis.</p>
      </section>
    </article>
  </main>

  <?php 
    include("includes/footer.php")
  ?>
</body>
</html>