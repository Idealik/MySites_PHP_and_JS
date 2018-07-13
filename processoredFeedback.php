<?php
    // values isset() проверяет не равно ли поле null
    $name = trim($_POST['UserName']);
    $email  = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);

    // constant inf
    $toaddress = "shavl.mark@yandex.ru";
    $subject = "FeedBack from site";
    $mailContent = "Client name: ". $name ."\r\n"
                    ."His email: ".$email. "\r\n"
                    . "His feedback: " . $feedback;
    $fromAdress = "From: IdealSite.com";

    //send message with the help of function mail
    mail($toaddress, $subject, $mailContent, $fromAdress);
    // mail (кому, тема, сообщение)
    echo nl2br($mailContent); // n2lb помогает при выводе
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <h1>Your feedback has benn sent </h1>
</head>
<body>
    
</body>
</html>