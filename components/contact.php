<?php require_once "myMailScrpt.php" ?>

<form id="contact" class="contact" method ="post" action="myMailScrpt.php">
    <div class="left">
        <input class="name" type="text" name="fname" placeholder="First Name" label="first name input">
        
        <input class="name" type="text" name="sname" placeholder="Second Name" label="second name input">
        
        <input class="name" type="mail" name="mail" placeholder="Your Email" label="email address input">
    </div>
    <div class="mid">
        <textarea class="lng-txt" name="long_text" placeholder="Type your message here..." label="message content input"></textarea>
        
        <button class="submit-btn" type="submit" name="submit">Send Me Message!</button>
        <?php 
            echo $kokot;
            echo $status;
            echo $GLOBAL['statusOne'];
            echo $statusTwo;
            echo $GLOBAL['status'];
        ?>
    </div>   
    
    <svg class="logo-bottom" width="100%" height="100%" viewBox="0 0 518 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;">
        <g>
            
            <path id="leftfinbottom" d="M168.115,295.615l-161.93,52.98l129.24,-83.52l32.69,30.54Z" style="fill-rule:none;stroke-width:3px;"/>
            
            <path id="rightfinbottom" d="M259.895,292.525l163.99,46.21l-132.6,-78.08l-31.39,31.87Z" style="fill-rule:nonzero;stroke-width:3px;"/>
            
            <path id="backfinbottom" d="M311.525,240.635l91.88,-19.03l54.77,53.98l-3.71,-64.32l57.05,-205.08l-109.14,197.52l-53.03,-1.17l-37.82,38.1Z" style="stroke-width:3px;"/>

            <path id="bodybottom" d="M214.985,329.575l124.05,-127.5l-124.05,-20.67l-135.54,20.67l135.54,127.5Z" style="stroke-width:3px;"/>
            
            <path id="upfinbottom" d="M223.025,174.665l0,-92.77l-13.79,92.77l13.79,0Z" style="fill-rule:nonzero;stroke-width:2px;"/>

        </g>
        </svg>
    
</form>