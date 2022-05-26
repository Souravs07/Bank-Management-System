<?php 

    require 'PHPMailerAutoload.php';
    
    function contactMail($subject, $body, $Email, $name){

    
    $mail  = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username = 'coderspace123@gmail.com';
    $mail->Password='aocklhmdzpnfeykq';

    $mail->setFrom("Enter Your Email", "Sky Bank");
    $mail->addAddress("Enter Your Email");
    $mail->addReplyTo("Enter Your Email");

    $mail->isHTML(true);
    $mail->Subject="$subject";
    $mail->Body="<p>Email From: $name</p> <p>Email Address: $Email</p> <p>$body</p>";

    if(!$mail->send()){
        return "fail";
    }
    else{
        return "success";
    }

    }

?>
