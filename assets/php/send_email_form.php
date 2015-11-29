<?php
    function kill($error) {
    
        // your error code can go here
        echo $error."<br /><br />";
        die();
    }

    $email_to = "chrispam1509@gmail.com";

    $email_subject = "Съобщение от СОТ ГРУП 08";

    // validation expected data exists
    $error_message = "";

    if(!isset($_POST['your-name']) ||
        !isset($_POST['your-email']) ||
        !isset($_POST['your-message'])) {
        $error_message .= 'Някои от полетата са празни.<br />';
    }

    $name = $_POST['your-name']; // required
    $email_from = $_POST['your-email']; // required
    $telephone = $_POST['your-phone']; // not required
    $message = $_POST['your-message']; // required

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp, $email_from)) {
        $error_message .= 'Имейлът който сте въвели не е валиден. <br />';
    }

    if(strlen($message) < 1) {
        $error_message .= 'Съобщението което сте въвели не е валидно. <br />';
    }

    $email_message = "Детайлите по-долу.\n\n";

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return htmlspecialchars(str_replace($bad,"",$string));
    }

    $email_message .= "Име: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Телефон: ".clean_string($telephone)."\n";
    $email_message .= "Съобщение: ".clean_string($message)."\n";

    // create email headers
    $headers = 'From: ' . $email_from . PHP_EOL;
    $headers .= 'Reply-To: ' . $email_from . PHP_EOL;
    $headers .= 'X-Mailer: php/' . phpversion();


    if(strlen($error_message) > 0) {
        // thing better way
        die($error_message);
    }

    $isMailSendt = mail($email_to, $email_subject, $email_message, $headers);
    if($isMailSendt){
        header("Location: ../../thanksForMessage/");
    }
    else
    {
        die ("unexpected error");
    }
?>