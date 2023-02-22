<?php
// incluir a biblioteca do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

// configurar as informações do servidor SMTP
$config = array(
    'smtp_host' => 'smtp.gmail.com', //smtp.example.com
    'smtp_port' => 587,
    'smtp_secure' => 'tls',
    'smtp_username' => 'bot.email.ifpa@gmail.com',
    'smtp_password' => '122333444455555' //senha
);

// criar um objeto PHPMailer
$mail = new PHPMailer(true);

try {
    // configurar as informações do servidor SMTP
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = $config['smtp_host'];
    $mail->SMTPAuth = true;
    $mail->Username = $config['smtp_username'];
    $mail->Password = $config['smtp_password'];
    $mail->SMTPSecure = $config['smtp_secure'];
    $mail->Port = $config['smtp_port'];

    // configurar o remetente, o destinatário, o assunto e o corpo da mensagem
    $mail->setFrom('lucasmagno3248@gmail.com', 'Lucas Magno');
    $mail->addAddress('lucaschagasmagno32@gmail.com', 'Nome do Destinatário');
    $mail->Subject = 'Assunto da Mensagem';
    $mail->Body = 'Corpo da Mensagem';

    // enviar o e-mail
    $mail->send();
    echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
    echo 'Erro ao enviar a mensagem: ' . $mail->ErrorInfo;
}
?>
