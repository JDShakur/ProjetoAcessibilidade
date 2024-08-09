<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Igreja Matriz</title>
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
        <a href="#Conteudo" class="Acess">Pular o menu de navegação é ir Direto para o conteúdo atrações turisticas igraja da matriz</a>
    </div>
    <?php 
        include("includes/header.php");
    ?>

  <main>
    <article id="Conteudo">
        <figure>
          <img src="imagens/igreja.webp.jpeg"  alt="A imagem captura a fachada da Igreja Matriz de São Roque, com uma torre alta e esguia centralizada na composição. A igreja tem uma arquitetura neoclássica com grandes portas e janelas arqueadas. O céu azul claro contrasta com o edifício cinza claro, e a foto é enquadrada por folhagens verdes nas laterais, sugerindo um ambiente urbano com vegetação.">
        </figure>
        <h1>Igreja Matriz de São Roque</h1>
        <p>Construída no século XVII, a igreja matriz é a maior igreja dedicada ao santo São Roque de todo território brasileiro, também considerada uma das mais bonitas do estado. No ano de 1836 a construção recebeu uma ampla reforma pois sua estrutura e paredes estavam ameaçadas. A partir do ano de 1937, passou a ser conhecida como “Matriz Velha” pelos habitantes, pois nesta ocasião a igreja passou a ter em sua fachada as linhas arquitetônicas do estilo colonial barroco. Com pinturas nas paredes e teto assinados pelos artistas plásticos italianos Irmãos Gentili, vitrais em mosaicos e com imagens importadas de outros países com valores não mencionados são os toques que deixam o interior da igreja cada vez mais refinado aos olhos dos admiradores deste tipo de arte. O prédio ainda conta em seu presbitério dois esplendidos murais, podendo ser notado também ao lado do evangelho o profeta Elias sendo confortado por um anjo no qual lhe traz alimento, que é símbolo da santíssima eucaristia. Ao lado da epistola, São Roque em cárcere recebendo estimulo através da sagrada comunhão.</p>
        <p>Autor: José Vinícius Fernandes dos Santos<br>Data: 16/05/2023</p>
    </article>
  </main>

  <?php 
    include("includes/footer.php")
  ?>
</body>
</html>