<?php

    $to = 'adejacob000@gmail.com';
    $firstname = $_POST["firstname"];
    $lastname  = $_POST["lastname"];
    $email     = $_POST["email"];
    $phone     = $_POST["phone"];
    $subject   = $_POST["subject"];
    $company   = $_POST["company"];
    $message   = $_POST["message"];
    
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>Name: '.$firstname.'  '.$lastname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Phone: '.$phone.'</td></tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Company: '.$company.'</td></tr>
        <tr><td>Text: '.$message.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo "<script>alert('Thanks For Contacting  !!'); </script>";
        echo "<script>window.open('index.html', '_self');</script>";
    }else{
        echo "<script>alert('Failed !!'); </script>";
        echo "<script>window.open('index.html', '_self');</script>";
    }
    

?>
