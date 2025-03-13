<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Mail
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function send(array $payload, string $template, string $subject)
    {
        $mail = new PHPMailer(true);

        try {

            $mail->IsSMTP(); // Define que a mensagem será SMTP
            $mail->Host = "mail.elevainvest.com.br"; // Endereço do servidor SMTP
            $mail->Port = 465; // Porta do servidor SMTP
            $mail->SMTPSecure = 'ssl'; // Tipo de segurança
            $mail->SMTPAuth = true; // Usa autenticação SMTP
            $mail->Username = 'recrutamento@elevainvest.com.br'; // Usuário do servidor SMTP
            $mail->Password = 'Eleva2025@'; // Senha do servidor SMTP
            $mail->SMTPDebug = 0;
            
            // Define o remetente
            $mail->From = 'recrutamento@elevainvest.com.br'; // Seu e-mail

            $mail->FromName = $this->container->get('appName'); // Seu nome

            $mail->setFrom($this->container->get('appEmail'), $this->container->get('appName'));

            $mail->addAddress($payload['to_email'], $payload['to_name']);

            $mail->isHTML(true);
            $mail->Subject = ($subject);

            $mail->Body = $this->container->get('view')->fetch('mails/' . $template, $payload);

            $mail->send();
        } catch (PHPMailerException $e) {
            echo 'Houve um erro na tentativa de enviar um e-mail';
        }
    }
}