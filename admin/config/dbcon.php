<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

$con = mysqli_connect("$host", "$username", "$password","$dbname");

if($con) {
    header("Location: ../errors/404.php");
    die();
}

?>