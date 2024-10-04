<?php
session_start();

// Create database connection
$con = mysqli_connect("localhost", "root", "", "blog");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['register_btn'])) {
    // Escape user inputs to prevent SQL injection
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if fields are empty
    if (empty($email) || empty($password)) {
        $_SESSION["message"] = "All fields are required!";
        header("Location: register_code.php");
        exit(0);
    }

    // Check if the email already exists
    $checkemail = "SELECT email FROM users WHERE email='$email'";
    $checkemail_run = mysqli_query($con, $checkemail);

    if (mysqli_num_rows($checkemail_run) > 0) {
        // Email already exists
        $_SESSION["message"] = "Hey, User with this email id already exists!";
        header("Location: register.php");
        exit(0);
    } else {
        // Hash the password before saving it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user into the database
        $user_query = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
        $user_query_run = mysqli_query($con, $user_query);

        if ($user_query_run) {
            $_SESSION["message"] = "Registered successfully!";
            header("Location: login.html");
            exit(0);
        } else {
            $_SESSION["message"] = "Something went wrong while inserting data!";
            header("Location: register.php");
            exit(0);
        }
    }
} else {
    // If the register button is not clicked, redirect to register page
    header("Location: register.php");
    exit(0);
}

// Close the connection
mysqli_close($con);
?>
