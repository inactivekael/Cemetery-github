<?php

require_once 'db.inc.php';



    $usern= $_POST["user"];
    $pass = $_POST["password"];

    $sql= "SELECT * FROM user WHERE userName ='$usern' AND userPwd = '$pass'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            $username = $row['userName'];
            session_start ();
            $_SESSION['user'] = $username;
            
        }

        header("Location: ../index.php?error=Success"); 

    }

    else
    {
        header("Location: ../LogIn.php?error=Invalid Account"); 
    }
    
   