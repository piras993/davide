<?php

session_start();
if(isset($_SESSION['user'])) header("Location:main.php");
?>
<html>
    <head>
        
    </head>
    <body>
        <h2>LOGIN</h2>
        <?php if(@$_GET['err'] ==1) {
           ?> <p>Login non corretto<p><?php
        } ?>
        <form method="post" action="inde.php">
            <p>Username:<br />
                <input type="text" name="user" >
            </p>
            <p>Password: <br />
                <input type="password" name="pass">
            </p>
            <input type="submit" name="op" value="login">
        </form>
    </body>
</html>

