<?php
require_once("../model/userModel.php");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($username === "" || $email === "" || $password === "") {
        echo "All fields are required!";
        exit;
    }
    else{
       $user=['username'=>$username,'password'=>$password,'email'=>$email];
        $status=addUser($user);
        if($status){
            header('location: ../view/login.html');

        }
        else
        {
            header('location: ..view/signup.html');
        }
    }
} else {
    echo "Invalid request!";
}
?>
