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

        mail("petrstoklas@gmail.com", "Message from Needaweb portfolio.", $message, $headers);
    }
?>