<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/contato.css">
</head>

<body>
    

<nav id="menu" class="navbar navbar-expand-lg body-tertiary mb-4">
        <div class="container">
            <a href="#" class="navbar-brand" id="links">Dander Mufflin</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-b mb-lg-0">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link" id="links">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="sobrenos.html" class="nav-link" id="links">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a href="contato.php" class="nav-link active" id="links">Contato</a>
                    </li>
                </ul>
    </nav>
    </div>


    <div class="container">
     
        <div class="row justify-content-center">
            <div class="col3">
                <form action="" method="post">
                    <fieldset>
                        <legend>Entre em contato conosco</legend>
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="email">
                        </div>

                        <div class="mb-3">
                            <textarea name="message" id="message" class="form-control"
                                placeholder="mensagem"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                     
                    </fieldset>
                </form>
            </div>
        </div>
        <img src="imagens/pam.jpg" alt="">
    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item">
                <a href="index.html" class="nav-link px-2 text-muted">Home</a>
            </li>
            <li class="nav-item">
                <a href="sobrenos.html" class="nav-link px-2 text-muted">Sobre nós</a>
            </li>
            <li class="nav-item">
                <a href="contato.html" class="nav-link px-2 text-muted">Contato</a>
            </li>
        </ul>


        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Aqui você pode adicionar o código para salvar os dados em um banco de dados ou realizar outras ações desejadas, como enviar um e-mail.
    // Por exemplo, você pode usar a função mail() do PHP para enviar o e-mail.

    // Exemplo de envio de e-mail
    $destinatario = "seu_email@example.com";
    $assunto = "Nova mensagem do formulário de contato";
    $mensagem_email = "E-mail: $email\n\nMensagem:\n$mensagem";
    
    mail($destinatario, $assunto, $mensagem_email);

    // Redirecionar para uma página de confirmação ou exibir uma mensagem de sucesso.
    header("Location: confirmacao.html");
}
?>


        <p class="text-center text muted">&copy:2023 TheOffice</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>