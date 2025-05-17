<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($username === "" || $email === "" || $password === "") {
        echo "All fields are required!";
        exit;
    }

    
    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO users VALUES (NULL, '$username', '$password', '$email')";

    if (mysqli_query($con, $sql)) {
        echo "Signup successful!";
        header("location: ../view/login.html");
    } else {
        echo "Database error: " . mysqli_error($con);
    }

    mysqli_close($con);
} else {
    echo "Invalid request!";
}
?>
