<?php
session_start();

// Establish a database connection
// include('admin/config/dbcon.php');
$con = mysqli_connect("localhost", "root", "", "blog");

if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the query with parameterized inputs
    $login_query = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
    $stmt = mysqli_prepare($con, $login_query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        // Validate user input before setting the session message
        $_SESSION['message'] = "You are logged in!";
        redirect('index.html');
    } else {
        $_SESSION['message'] = "Invalid Email or Password!";
        redirect('login.php');
    }
} else {
    $_SESSION['message'] = "You're not allowed to access this file";
    redirect('login.php');
}

// Simplified redirect function
function redirect($url) {
    header("Location: $url");
    exit(0);
}
?>