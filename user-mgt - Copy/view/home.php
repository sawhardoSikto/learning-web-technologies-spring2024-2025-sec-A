<?php
if (isset($_COOKIE['status'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>

    <body>
        <h1 id="msg">Welcome to home</h1>
        <input type="text" name="username" id="username">
        <input type="button" name="submit" id="submit" value="Submit" onclick="ajax()">
        <a href="../controller/logout.php">logout</a>
        <script>
        function ajax()
        {

            let username=document.getElementById('username').value;
            let xhttp=new XMLHttpRequest();
            xhttp.open('get','../controller/ajax.php?username='+username,true);
            xhttp.send();
            xhttp.onreadystatechange=function (){
                if(this.readyState==4 && this.status==200)
            {
                document.getElementById('msg').innerHTML=this.responseText;
            }
            }
        }
    </script>
    </body>

    </html>



    <?php
} else {
    header('location:../view/login.html');
}
?>