<?php
session_start();


?>
<!DOCTYPE html>
<html>
    <title></title>
    <!--Assets-->
    <link rel="stylesheet" href="css/all.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

   
    <head>
        <body>
            <nav class="navcofig">
                
                <?php 
                if(isset($_SESSION["user"]))
                {
                    echo "<a href='index.php'> Home</a>";
                    echo "<a href='Profile.php'>".$_SESSION["user"]."</a>";
                    echo "<a href='php/dbLogout.inc.php'>Logout</a>";
                }
                else
                {
                    echo "<a href='index.php'>Home</a>";
                    echo "<a href='LogIn.php'>Log in</a>";
                    echo "<a href='Register.php'>Register</a>";
                    echo "<a href='dead.php'>Info</a>";
                }
                ?>
            </nav> 