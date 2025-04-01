<?php

    $nome =addslashes($_POST['nome']);
    $email =addslashes($_POST['email']);
    $telefone =addslashes($_POST['telefone']);
    
    $para = "davidmilhomens16@gmail.com";
    $assunto = "Contato pelo site";


    $corpo = "Nome: ".$nome."\n";
    $corpo .= "E-mail: ".$email."\n";
    $corpo .= "Telefone: ".$telefone."\n";

    $cabeca = "From+ davidyuri.santos05@gmail.com"."\n"."reply-to: ".$email;"\n".""X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo ("Mensagem enviada com sucesso!");
    }else{
        echo ("Mensagem nao enviada!");
    }


?>