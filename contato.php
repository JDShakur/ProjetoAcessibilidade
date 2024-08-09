<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Viva São Roque-Contato</title>
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
        <a href="#Conteudo" class="Acess">Pular o menu de navegação e ir Direto para o formulário de contato</a>
    </div>
    <?php 
        include("includes/header.php");
    ?>
    <section>
        <div class="container pt-4">
            <div class="row">
                <a href="#Conteudo" class="Pulo">Clique para ir direto para o formulário</a>
                <iframe class="mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58526.88810654159!2d-47.13258695!3d-23.53500175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf12acb56b6e03%3A0x1bbf40ce3d5a70a3!2zU8OjbyBSb3F1ZSwgU1A!5e0!3m2!1spt-BR!2sbr!4v1683570736009!5m2!1spt-BR!2sbr"
                width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section id="Conteudo">
        <div class="container">
        <form id="meuFormulario" action="../includes/validador.php" method="post" class="needs-validation" novalidate>
                <fieldset>
                    <legend>Formulário para Contato</legend>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-6">
                            <label for="nome" class="form-label">Nome completo:</label>
                            <input class="form-control mb-3" type="text" id="nome" name="nome" placeholder="Digite seu nome" required aria-required="true">
                        </div>

                        <div class="col-sm-12 col-md-6 col-xl-6">
                            <label for="email" class="form-label">E-mail:</label>
                            <input class="form-control mb-3" type="email" id="email" name="email" placeholder="Digite seu email" required aria-required="true">
                        </div>
                    </div>

                    <div class="row row-cols-2">
                        <div class="col-sm-12 col-md-6 col-xl-6">
                            <label for="celular" class="form-label">Celular:</label>
                            <input class="form-control" type="tel" id="celular" name="celular" placeholder="Digite seu número" required aria-required="true">
                        </div>

                        <div class="col-sm-12 col-md-6 col-xl-6">
                            <label for="interesse" class="form-label">Interesse:</label>
                            <input class="form-control" type="tel" id="interesse" name="interesse" placeholder="Turismo/Divulgação" required aria-required="true">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="mensagem" class="form-label">Mensagem:</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui" required aria-required="true"></textarea>
                        <button type="submit" class="my-2 mb-4 btn btn-outline-success" id="bootform"  ">Enviar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
    <script>
    document.getElementById('meuFormulario').addEventListener('submit', function(event) {
        var isValid = true;

        var nome = document.getElementById('nome');
        if (!nome.value) {
            alert('Por favor, preencha o nome.');
            isValid = false;
        }

        var celular = document.getElementById('celular');
        if (!celular.value) {
            alert('Por favor, preencha o celular.');
            isValid = false;
        }

        var interesse = document.getElementById('interesse');
        if (!interesse.value) {
            alert('Por favor, preencha o campo de interesse.');
            isValid = false;
        }

        var email = document.getElementById('email');
        if (!email.value) {
            alert('Por favor, preencha o e-mail.');
            isValid = false;
        } else if (!validateEmail(email.value)) {
            alert('Por favor, insira um e-mail válido.');
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });

    function validateEmail(email) {
        var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return re.test(String(email).toLowerCase());
    }
</script>
</body>

<?php 
  include("includes/footer.php")
  ?>
</html>