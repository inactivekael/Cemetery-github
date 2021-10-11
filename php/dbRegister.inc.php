<?php

require_once 'db.inc.php';


if(isset($_POST["submit"]))
    { 
        $username = $_POST["username"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $num = $_POST["num"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $rpassword = $_POST["rpassword"];

        //check username
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

        if( mysqli_fetch_assoc($result) ) {
            echo "<script>
                    alert('Username already exist!')
                  </script>";
            return false;
            
        }

        $sql = "INSERT INTO user (userName, userFname, userLname,userContact,userMail,userPwd)
                VALUES ('$username','$fname','$lname','$num','$email','$password')";
        $conn->query($sql);
        header("Location: ../index.php?error=Success");
        
    }

else
{
    header("Location: ../Register.php?error=connectionError");
}
?>