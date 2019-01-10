<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'outfit';

$con = mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['submit'])){

    $email = $_POST['email'];

    $query = ("INSERT INTO suscribe(email) VALUES('$email')");

    if(mysqli_query($con,$query)){
        echo "<script>alert('Thanks For Signing Up For Our Newsletters !!'); </script>";
        echo "<script>window.open('index.php', '_self');</script>";
    }else{
        echo "<script>alert('Failed !!'); </script>";
        echo "<script>window.open('index.php', '_self');</script>";
    }

}
?>