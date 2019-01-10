<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'outfit';

$conn = mysqli_connect($host,$user,$pass,$db);


if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email    = $_POST['email'];
    $c_email  = $_POST['c_email'];
    $phone    = $_POST['phone'];
    $c_t      = $_POST['c_t'];
    $s_p      = $_POST['s_p'];
    $country  = $_POST['country'];
    $lang     = $_POST['lang'];
    $opt      = $_POST['opt'];

    $query = ("INSERT INTO contact_info(firstname,lastname,email,c_email,phone,c_t,s_p,country,lang,opt)
            VALUES('$firstname','$lastname','$email','$c_email','$phone','$c_t','$s_p','$country','$lang','$opt')");
     
    if(mysqli_query($conn,$query)){
        echo "<script>alert('Thanks For joining Outfit International !!'); </script>";
        echo "<script>window.open('thanks.html', '_self');</script>";
    } 
}

?>