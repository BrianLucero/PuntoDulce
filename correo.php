<?php 


if (isset($_POST['enviar'])) {
    if (!empty($_POST['email']) && !empty($_POST['contraseña1'])) {
        $email = $_POST['email'];
        $contraseña1 = $_POST['contraseña1'];
        $header = "From:lucero14.lucero@gmail.com" . "/r/n";
        $header.= "Reply-To: lucero14.lucero@gmail.com . /r/n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email,$contraseña1);

    }
}