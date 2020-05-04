<?
    if(
        $_POST && 
        isset($_POST['mail']) && 
        isset($_POST['long_text']) && 
        isset($_POST['fname']) && 
        isset($_POST['sname'])
        ) {
        $to = "petrstoklas@gmail.com";
        $subject = "test";
        $message = "test";
        $headers = "from: webmail@domena.koncovka \n";
        $headers .= "X-mailer: phpWebmail \n";
        if( mail($to, $subject, $message, $headers) )
            {echo "OK - mail odeslán";}
        else
            {echo "CHYBA - odeslání se nepovedlo";}
    }
?>