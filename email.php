<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

$to = "diegodemello027@gmail.com";
$subject = "Formulário de Contato";
$body = "Nome: " . $name . 
        "\nEmail: " . $email . 
        "\nMensagem: " . $message;
$header = "From:diegodemello027@gmail.com" . "\n" . "Reply-To:" . $email . "\nX=Mailer:PHP/" . phpversion();

if(mail($to, $subject, $body, $header)){
    echo("Email enviado.");
}else{
    Echo("Email não pode ser enviado.");
}
?>