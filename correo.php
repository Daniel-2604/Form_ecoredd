<?php

if (isset($_POST['name'])) {
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empaty($_POST['email'])) {
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: eldany.rockd1@gamil.com" . "\r\n";
        $header.= "Reply-To: eldany.rockd1@gamil.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        mail = @mail($email,$asunto,$msg,$header);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>"
        }
    }
}