<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST)){
    $nome       =   $_POST['nome'];
    $telefone   =   $_POST['telefone'];
    $email      =   $_POST['email'];
    $mensagem   =   $_POST['message'];


    $mail = new PHPMailer(true);    
    try {
        //Server settings
        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'gbcoe2@gmail.com';                  // SMTP username
        $mail->Password = 'batata13';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom('gbcoe2@gmail.com', 'Contato Don Novo');
        $mail->addAddress('comercial.donnovo@gmail.com', '');
        $mail->addCC('contato@donnovo.com.br');     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Novo Contato pelo site';
        $mail->Body    = '<h1>Novo Contato Realizado através do Site</h1>'.
                        '<br><p><strong>Nome</strong> '. $nome .'</p>'.
                        '<br><p><strong>Telefone</strong> ' . $telefone .' </p>'.
                        '<br><p><strong>Email</strong> ' . $email .' </p>'.
                        '<br><p><strong>Mensagem</strong><br> ' . $mensagem .' </p><br><br>'.
                        '<em>Não esquecer de respondê-lo o quanto antes</em>';
        $mail->send();
        // echo 'Message has been sent';
        header("Location: http://donnovo.com.br/email-enviado/"); die();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}else{
    global $wp_query;
            $wp_query->set_404();
            status_header( 404 );
            get_template_part( 404 ); exit();
}