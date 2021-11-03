<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'vendor/autoload.php';

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $assunto = $_POST['subject'];
        $mensagem = $_POST['message'];

        $from = new SendGrid\Email(null, $email);
        $subject = $assunto;
        $to = new SendGrid\Email(null, "contato@senamaq.com.br");
        $content = new SendGrid\Content("text/html", "Nome: $nome <br><br>$mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);

        header("Location: index.php");

die();



        ?>
    </body>
</html>
