<?php

require 'PHPMailer/autoload.php';

$mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp1.example.com;smtp2.example.com';    // aqui no se si va el host de la pagina
    $mail->Username = 'user@example.com';                 //con el usuario de la misma 
    $mail->Password = 'secret';

    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    $mail->setFrom('elias1993kuky@gmail.com');// remitente
    $mail->addAddress('Isalazar@yavirac.edu.ec');   // destinatario


    $mail->Subject = ('inge no sale'); // asunto
    $mail->Body    = ('este es un mensaje para el inge salazar'); // contenido

    if($mail->send()= false){
      echo "no se pudo enviar email";
      echo "$mail->ErrorInfo";
    }else {
      echo "memsaje enviado exitosamente";
    };
