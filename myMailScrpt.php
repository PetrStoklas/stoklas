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

        $status = "0";

        if (mail("petrstoklas@gmail.com", "Message from Needaweb portfolio.", $message, $headers))
            $status = "1";
        
        else $status = "2";

        header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

        // sleep(2);

        // $status = "0";

        exit;
    }
?>