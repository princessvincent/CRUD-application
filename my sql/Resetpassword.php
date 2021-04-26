<?php

// if you really login
//  if (!isset($_SESSION['logged_user'])) {

//     // if you dont login retur to login page
//     header("location: loginprocess.php");
// }


?>

<!DOCTYPE html>
<html>

<body>
    <h1>Reset password</h1>
    <a href="dashboard.php">goto dashboard</a><br><br><br>
    <form action="password.php" method="POST">
        Email: <br><input type="email" name="email" placeholder="email" required="">
        <br>
        <br>
        New password: <br><input type="password" name="password" placeholder="password" required="">
        <br>
        <br>
        <input type="submit" name="passwordreset" value="Reset Password">


    </form>
</body>

</html>