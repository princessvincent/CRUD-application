<?php
// include('Loginprocess.php');
?>

<!DOCTYPE html>
<html>

<body>
    <h1>Login Page</h1>
    <div>
        <form action="loginprocess.php" method="POST">

            <div>
                Email Address: <br><input type="email" name="email" placeholder="Email" required="">
            </div><br>

            <div>
                password: <br><input type="password" name="password" placeholder="password" required="">
            </div><br>

            <input type="checkbox" id="check">
            <span> Remember me </span>

            <input type="submit" name="loginprocess" value="Login">

            <p><a href="index.php"> Register Here</a></p>

        </form>
        
    </div>
</body>

</html>