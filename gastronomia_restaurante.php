<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Restaurantes</title>
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
        <a href="#Conteudo" class="Acess">Pular o menu de navegação é ir Direto para o conteúdo de Restaurantes de São Roque</a>
    </div>
    <?php 
        include("includes/header.php");
    ?>

    <main>
        <article id="Conteudo">
            <h1>Os restaurantes que você precisa conhecer em São Roque</h1>
            <p>Os restaurantes em São Roque oferecem uma experiência gastronômica única para os visitantes que desejam explorar a deliciosa culinária local. Com uma variedade de opções que atendem a todos os gostos e preferências, os restaurantes em São Roque proporcionam uma combinação perfeita, separamos alguns restaurantes para que você não pode deixar de visitar.</p>
            <p>Autor: Heitor Augusto Rocha<br>Data: 06/06/2023</p>

            <section>
                <h2>Vila Don Patto</h2>
                <figure>
                    <img src="imagens/gastro/fvilla.webp" alt="A imagem exibe o letreiro da entrada do restaurante Vila Don Patto. O sinal é uma placa de pedra clássica com o nome VILA DON PATTO gravado em letras maiúsculas e um subtítulo que diz 'NATUREZA, LAZER & GASTRONOMIA'. Acima da placa, tem uma figura de um pato e ao lado um galo estilizado.">
                </figure>
                <p>A história começa em 1919, quando os bisavós portugueses de Tulio Patto, atual gestor do centro gastronômico. A Vila Don Pato é conhecida por sua tradição em oferecer pratos deliciosos da cozinha portuguesa e italiana. Seu cardápio é repleto de opções que agradam a todos os paladares.</p>
                <p>Além da comida excepcional, a Vila Don Pato também é famosa por sua extensa carta de vinhos. Os vinhedos da região de São Roque proporcionam uma seleção de vinhos premiados, que podem ser harmonizados com os pratos escolhidos.</p>
            </section>

            <section>
                <h2>Cantina Tia Lina</h2>
                <figure>
                    <img src="imagens/gastro/ftialina.webp" alt="A imagem mostra a fachada do Restaurante Tia Lina, caracterizado por um conjunto de construções térreas com telhados de telhas cerâmicas. O complexo apresenta uma arquitetura rústica com paredes em tons neutros e detalhes em madeira. Há uma área de pátio pavimentada com pedras na frente dos edifícios, onde algumas cadeiras e mesas de madeira estão dispostas, criando um espaço de convívio ao ar livre.">
                </figure>
                <p>A Cantina Tia Lina oferece uma experiência culinária autêntica. Com suas raízes italianas, este restaurante é conhecido por servir pratos tradicionais e deliciosos, a decoração que remete às típicas cantinas italianas, tornando-o em um ambiente familiar e acolhedor.</p>
                <p>O cardápio da Cantina Tia Lina apresenta uma variedade de pratos italianos autênticos, onde são feitos desde as massas e os molhos até risotos cremosos e antepastos irresistíveis, cada prato é elaborado com ingredientes de alta qualidade e respeitando as receitas tradicionais.</p>
            </section>

            <section>
                <h2>Quinta do Olivardo</h2>
                <figure>
                    <img src="imagens/gastro/fquinta.webp" alt="A imagem mostra uma parte da fachada da adega e restaurante da Quinta do Olivardo. O destaque é uma estrutura redonda de madeira com aparência rústica e telhado de telhas cerâmicas. Há um grande letreiro circular na frente da construção, com o nome QUINTA DO OLIVARDO e a indicação de localização em SÃO ROQUE - SP.">
                </figure>
                <p>Os pratos do restaurante Quinta do Olivardo, que são inspirados na gastronomia portuguesa, combinam a tradição com a frescura. Cada refeição, desde as famosas bacalhoadas até os saborosos leitões assados na brasa, é uma viagem sensorial aos sabores de Portugal.</p>
                <p>As delícias servidas combinam perfeitamente com os premiados vinhos produzidos no local. O cenário perfeito para momentos agradáveis de comida com amigos e familiares é o ambiente acolhedor e aconchegante.</p>
            </section>

            <section>
                <h2>Vinícula Góes</h2>
                <figure>
                    <img src="imagens/gastro/fgoes.webp" alt="A imagem mostra a fachada da Vinícola Góes, uma construção de dois andares com uma arquitetura elegante e detalhes clássicos. A vinícola é pintada em um tom amarelo vibrante com detalhes e acabamentos em branco. Há arcos no térreo que parecem abrigar janelas e portas de entrada e um terraço ou varanda no segundo andar.">
                </figure>
                <p>O Vinícola Góes oferece uma ampla seleção de pratos que combinam perfeitamente com os vinhos premiados da região. Desde cortes de carne saborosos até pratos vegetarianos e veganos, há muitas opções para todos os gostos.</p>
                <p>O restaurante também oferece harmonizações especiais com os melhores vinhos para cada prato. Durante as visitas guiadas pela vinícola, os visitantes também têm a oportunidade de fazer degustações e aprender mais sobre a arte da vinicultura.</p>
            </section>
        </article>
    </main>

  <?php 
    include("includes/footer.php")
  ?>
</body>
</html>