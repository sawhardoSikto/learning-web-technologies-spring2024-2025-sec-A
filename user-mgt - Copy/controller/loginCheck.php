<?php
require_once("../model/userModel.php");
if (isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if ($username === "" || $password === "") {
        echo "Null username/password!";
        exit;
    } 
    else
    {
        $user=['username'=>$username,'password'=>$password];
        $status=login($user);
        if($status)
        {
            setcookie("status",true,time()+3000,"/");
            header('location: ../view/home.php');
        }
    }

}
?>
<?php
require_once("../model/userModel.php");
session_start();

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === "" || $password === "") {
        echo "Null username/password!";
        exit;
    } else {
        $user = ['username' => $username, 'password' => $password];
        $status = login($user);
        if ($status) {
            setcookie('status', 'true', time() + 3000, '/');
            header('location: ../view/home.php');
            exit();
        } else {
            echo "Invalid username or password!";
        }
    }
} else {
    echo "Invalid request! Please submit the form!";
}
?>
