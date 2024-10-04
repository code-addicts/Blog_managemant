<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "admin_login";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if($conn->connect_error) {
        die("Connection failed:". $conn->connect_error);
    }

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";

    $result = $conn->query($query);

    if($result->num_rows == 1) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin/admin_panel.php");
        exit();
    }
    else {
        header("Location: errors/dberror.php");
        exit();
    }
}

?>