<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'outfit';

$con = mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['next'])){

    $assoc_id = $_POST['assoc_id'];
    $assoc_fname  = $_POST['assoc_fname'];
    $assoc_lname = $_POST['assoc_lname'];

    $query = ("INSERT INTO referal(assoc_id, assoc_fname,assoc_lname) VALUES('$assoc_id', '$assoc_fname', '$assoc_lname')");

    if(mysqli_query($con,$query)){
        header('location: contact-info.html');
    }else{
        echo "Failed";
    }

}
?>

 