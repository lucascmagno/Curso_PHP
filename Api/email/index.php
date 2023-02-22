<?php
$to = "lucaschagasmagno32@gmail.com";
$subject = "Assunto do Email";
$message = "Este é um email de teste.";
$headers = "De: lucasmagno3248@gmail.com\r\n";

//funcao para definir as configuracoes SMTP e smtp_port dinamicamento no PHP
//define o nome do host ou endereco do seu servidor de email
ini_set('SMTP', '');
//define a porta do servidor de email
ini_set('smtp_port', 587);

if (mail($to, $subject, $message, $headers)) {
    echo "Email enviado com sucesso!";
} else {
    echo "Falha ao enviar o email.";
}
?>
