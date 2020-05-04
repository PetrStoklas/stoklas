<?
    if(
        $_POST && 
        isset($_POST['mail']) && 
        isset($_POST['long_text']) && 
        isset($_POST['fname']) && 
        isset($_POST['sname'])
        ) {
        $message = $_POST['long_text'];
        $headers = "from: {$_POST['mail']} \n";
        $headers .= "X-mailer: phpWebmail \n";

        $infoHeaders = "from: petrstoklas@gmail.com \n";
        $infoMessage = "Thank you for contacting Needaweb. You will get an answer within few days.";
        mail("petrstoklas@gmail.com", "Message from Needaweb portfolio.", $message, $headers);
        mail($_POST['mail'], "Your message to Needaweb.", $infoMessage, $infoHeaders);
    }
?>