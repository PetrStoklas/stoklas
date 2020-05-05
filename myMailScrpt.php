<?
    $kokot = "kokot";
    $status = "0";
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

        if (mail("petrstoklas@gmail.com", "Message from Needaweb portfolio.", $message, $headers))
            $statusOne = "1";
        
        else $statusTwo = "2";

        header("Location: https://www.needaweb.eu");

        // sleep(2);

        // $status = "0";

        exit;
    }
?>