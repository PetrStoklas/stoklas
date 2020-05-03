<!DOCTYPE html>
<html class="no-js" lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Needaweb - Petr Stoklas</title>
        <meta name="description" content="I need a web or needaweb is web design studio where building every kind of web is possible.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Advent+Pro:500|Aleo:300&display=swap" rel="stylesheet">   
        <link rel="shortcut icon" type="image/png" href="img/shark-final.png">
    </head>
    <body>
        <div class="container">
            <div class="navintro">
                <!-- nav with shark -->
                <?php require_once 'body/nav.php'; ?>
                <!-- intro texts -->
                <?php require_once 'body/intro.php'; ?>
            </div>

<!--            <div class="portfolio" id="portfolio"> -->
<!--                &lt;!&ndash; portfolio three projects &ndash;&gt;-->            
<!--            </div>  -->
        
            <div class="reasons" id="reasons">
                <!-- additional text - reasons to have good website -->
                <?php require_once 'body/reasons.php'; ?>
            </div>
        </div>
        <div id="contact-wrap">
                <!-- contact form -->
                <?php require_once 'body/contact.php'; ?>
        </div>
        <script src="script.js"></script>
    </body>
</html>