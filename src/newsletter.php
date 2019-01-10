<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'outfit';

$con = mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['submit'])){

    $name  = $_POST['name'];
    $email = $_POST['email'];

    $query = ("INSERT INTO newsletter(name, email) VALUES('$name', '$email')");

    if(mysqli_query($con,$query)){
        echo "<script>alert('Thanks For Signing Up For Our Newsletters !!'); </script>";
        echo "<script>window.open('index.html', '_self');</script>";
    }else{
        echo "Failed";
    }

}
?>