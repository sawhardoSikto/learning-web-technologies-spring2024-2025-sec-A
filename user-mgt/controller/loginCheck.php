<?php
session_start();

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === "" || $password === "") {
        echo "Null username/password!";
        exit;
    }

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

    if (!$con) {
        die("Database connection failed!");
    }

    
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Set cookie and 
        setcookie("status", "true", time() + 3000, "/");
        header('location: ../view/home.php');
    } else {
        echo "Invalid username or password!";
    }

    mysqli_close($con);
} else {
    echo "Invalid request! Please submit the form!";
}
?>
