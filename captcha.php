<?php
    $email;$question;$captcha;
    $secret = 6LfNfh8TAAAAAH-ORcX5gRE8Zr_0saCBrjssEZDl;
    $ip = $_SERVER['REMOTE_ADDR'];
    if(!empty($_POST['question'])){
        $question=$_POST['question'];
    }
    if(!empty($_POST['g-recaptcha-response'])){
        $question=$_POST['g-recaptcha-response'];
    }
    
    if(!captcha){
        echo "<h2>Please check the captcha form.</h2>";
        exit;
    }
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$captcha."&remoteip=".$ip);
    if($response.success==true){
        echo '<h2>Thank you for your question. We will answer it as soon as possible.</h2>';
    }
?>