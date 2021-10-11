<?php
include_once 'header.php';

?>
<body>
        <div class="logform">
            <form action="php/dbRegister.inc.php" method="post" > 
                <label>User Name</label>
                <input type="text" name="username"/>

                <label>First Name</label>
                <input type="text" name="fname"/>

                <label>Last Name</label>
                <input type="text" name="lname"/>

                <label>Contact Number</label>
                <input type="text" name="num" placeholder="Contact Number ..."/>

                <label>Email Address</label>
                <input type="email" name="email" placeholder="email@email.com"/>

                <label>Password </label>
                <input type="password" name="password"/>

                <label>Repeat Password </label>
                <input type="password" name="rpassword"/>

                <div class="center">
                <button type="submit" name="submit" class="submit">Register</button>
                </div>
                
            </form>
        </div>

</body>
    </head> 
</html>