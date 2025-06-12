<?php

setcookie("status","true", time() -10,"/");
header("location:../view/login.html");

?>