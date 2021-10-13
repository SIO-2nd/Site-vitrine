<!--Vérifier si la valeur d'envoie de mail existe pour ne rien changer-->
<?php
session_start();

if (!isset($_SESSION['message']))
{
    $_SESSION['message'] = '';
}

if (!isset($_SESSION['send']))
{
    $_SESSION['send'] = '';
}
?>
<!--Configurer le compte Outloook ainsi que le coprs du mail puis envoyer celui-ci puis définir la variable d'envoie d'un message-->
<?php
    $mailfrom = "groupe1-projet@outlook.fr";
    $mailpsw = "Gr0upE1-Pr0jEt";
/*Si vous voulez que l'éditeur et le destinataire soit pas le même compte mettez des emails différents, sinon mettez les même adresses*/
    $mailto = "groupe1-projet@outlook.fr";
    $mailsub = utf8_decode($_POST["subject"]);
    $_SESSION['message'] = "Le message a été envoyé avec succès";
    $_SESSION['send'] = "1";
    $mailmsg = utf8_decode("Envoyé par : {$_POST['name']}<br>Son email : {$_POST['email']}<br>Objet : {$_POST['subject']}<br>Message : {$_POST['message']}<br><br>©Info Tools - Groupe 1");
    require("src/PHPMailer.php");
    require("src/SMTP.php");
    require("src/Exception.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSmtp();
    $mail->SMTPDebug = 2;

    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.live.com";
    $mail->Port = 587; 

    $mail->IsHTML(true);
    $mail->Username = $mailfrom;
    $mail->Password = $mailpsw;
    $mail->setFrom($mailfrom);
    $mail->Subject = $mailsub;
    $mail->Body = $mailmsg;
    $mail->AddAddress($mailto);
    $mail->Send();
    /*Rediriger l'utilisateur sur la page de message*/
    echo '<script language="Javascript">
    <!--
    document.location.replace("index.php");
    // -->
    </script>';
?>
