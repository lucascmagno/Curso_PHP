<?php

//O PHPMailer serve para enviar email com PHP
//link para baixar o PHPMailer-master
//https://github.com/PHPMailer/PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    //caminho para os arquivos do PHPMailer
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

// Cria um novo objeto PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP do Gmail
    //Ja esta configurado corretamente!!!
    $mail->SMTPDebug = 0;                      // Habilita saída de depuração
    $mail->isSMTP();                           // Usa o protocolo SMTP
    $mail->Host = 'smtp.gmail.com';            // Endereço do servidor SMTP do Gmail
    $mail->SMTPAuth = true;                    // Habilita autenticação SMTP
    $mail->Username = 'bot.email.ifpa@gmail.com';   // Seu endereço de e-mail do Gmail
    $mail->Password = '122333444455555';             // Sua senha do Gmail
    $mail->SMTPSecure = 'tls';                 // Usa a criptografia TLS
    $mail->Port = 587;                         // Porta SMTP do Gmail

    // Configurações do e-mail
    $rementente = "lucas@gmail.com";
    $nome_remetente = "Lucas Magno";

    $destinatario = "pedro@gmail.com";
    $nome_destinatario = "Pedro Mendes";

    $email_endereco = "bot.email.ifpa@gmail.com";
    $email_resposta = "sucesso!";

    $mail->setFrom($rementente, $nome_remetente);   // remetente Seu endereço de e-mail e nome
    $mail->addAddress($destinatario, $nome_destinatario);  // Endereço de e-mail e nome do destinatário
    $mail->addReplyTo($email_resposta, $email_resposta);  // Endereço de e-mail e nome de resposta
    $mail->isHTML(true);                      // Habilita formato HTML
    $mail->Subject = 'Assunto do E-mail';     // Assunto do e-mail
    $mail->Body    = '<Corpo do E-mail em HTML>'; // Conteúdo do e-mail em HTML. ex: <h1>OLa<h1>
    $mail->AltBody = 'Corpo do E-mail em Texto'; // Conteúdo do e-mail em texto simples. Aqui fica o conteúdo

    // Envia o e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo 'Erro ao enviar a mensagem: ' . $mail->ErrorInfo; //mostra o erro
}

?>