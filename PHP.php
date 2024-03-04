<?php
if(isset($_POST['submit'])){
    $to = "ampademicole@gmail.com";



    $inputName11 = $_POST['inputName11'];
    $inputEmail3= $_POST['inputEmail3'];
    $inputTelefono= $_POST['inputTelefono'];
    $subject= $_POST['subject'];
    $body= $_POST['body'];
    $headers = 'From: '.$inputEmail3 . "\r\n";


    $body = "inputName11 : ".$inputName11. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>