<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "arthur.rosisca@hotmail.com";
    $subject = "Contato - Site";

    $body = "Nome: ".$nome. "\r\n"."Email: ".$email. "\r\n"."Mensagem: ".$mensagem;

    $header = "From: arthurrosisca@utfpr.edu.br"."\n"."Reply-to: ".$email."\n".""X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo("Email sent successfully!");
    }else{
        echo("Email could not be sent.");
    }

?>