<?php
    include './id_smtp.php';
    include './model/model_utilisateur.php';
    include './manager/manager_utilisateur.php';
    include './utils/connectBdd.php';
    include './vue/view_send_mail.php';
    $message = "";
    if(isset($_POST['mail'])){
        $test = new manager_utilisateur(null, null, null, null, null);
        /* $userEmail = 'mathieu.mith@laposte.net'; */
        $userEmail = "mathieu.mith@laposte.net";
        $subject = utf8_decode("Test mail envoyé depuis PHP");
        $emailMessage =  "PHP mailer Projet secu<br>
        Mathieu";
        $test->sendMail2($userEmail, $subject, $emailMessage, $login_smtp, $mdp_smtp);
        $message = "mail envoyé";
    }
    else{
        $message = "Cliquer pour envoyer un mail";
    }
    echo $message;
?>