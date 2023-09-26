<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $assunto = $_POST["subject"];
    $mensagem = $_POST["message"];

    $destinatario = "erlanbelo@hotmail.com"; // Substitua pelo seu endereço de e-mail

    $assunto_email = "Mensagem de Contato: $assunto";
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Assunto: $assunto\n\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Envia o e-mail
    mail($destinatario, $assunto_email, $corpo_email);

    // Redireciona de volta para a página de confirmação ou obrigado
    header("Location: obrigado.html");
} else {
    // Se o método de requisição não for POST, redireciona para a página de erro
    header("Location: erro.html");
}
?>