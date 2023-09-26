<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "erlanbelo@hotmail.com"; // Seu endereço de email
    $subject = "Novo formulário de contato: $subject";
    $headers = "From: $email";

    // Monta a mensagem de email
    $email_message = "Nome: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Mensagem:\n$message";

    // Envia o email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email enviado com sucesso
        echo "Obrigado por entrar em contato! Sua mensagem foi enviada.";
    } else {
        // Erro ao enviar o email
        echo "Desculpe, houve um problema ao enviar sua mensagem.";
    }
} else {
    // Caso alguém acesse o arquivo diretamente sem enviar o formulário
    echo "Acesso inválido.";
}
?>
