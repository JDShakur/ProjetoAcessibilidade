<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sitio Santo Antônio</title>
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
        <a href="#Conteudo" class="Acess">Pular o menu de navegação é ir Direto para a atração turistica Chácara e Santo Antônio</a>
    </div>
    <?php 
        include("includes/header.php");
    ?>
  <main>
    <article id="Conteudo">
        <figure>
            <img src="imagens/sitio.webp.jpeg" alt="A imagem exibe um sítio com um conjunto de construções rurais com telhados inclinados e estruturas de suporte visíveis. As edificações são brancas com detalhes e bases em um tom de marrom claro. Elas estão situadas em um amplo campo gramado, bem cuidado, sob um céu claro com poucas nuvens.">
        </figure>
        <h1>Sitio Santo Antônio</h1>
        <p>Um patrimônio com valor histórico com inúmeras personalidades a qual foi atribuído, desde 1681, ano no qual foi construída pelo irmão do fundador da cidade, o sitio Santo Antônio é uma das construções mais importantes da cidade, é lá onde estão localizados a casa grande e a capela de Santo Antônio, além de contar com uma grande área com espaço verde e um belo lago para os visitantes. Com entradas gratuitas aos fins de semanas e feriados, o sitio já foi lar de grandes nomes brasileiros como o Barão de Piratininga e o escritor Mario de Andrade. Após serem restauradas, as ruinas da casa grande e da capela foram abertas a visitas de turistas e estudantes, sendo estas monitoradas para a segurança do local.</p>
        <p>Autor: José Vinícius Fernandes dos Santos<br>Data: 16/05/2023</p>
    </article>
  </main>

  <?php 
  include("includes/footer.php")
  ?>
</body>
</html>