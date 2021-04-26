<?php
session_start();
$user = "";
if (isset($_SESSION["logged_user"])) {
  $user = $_SESSION["logged_user"];
}

//logout
if (isset($_GET['action']) && $_GET['action'] == "logout") {
  $_SESSION = [];
  session_destroy();
  header("location: Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="?action=logout">Logout</a>&nbsp;
  <a href="CRUD_Insert_Form.php">Create Course</a>&nbsp;
  <a href="CRUD_Read.php">View Courses</a>&nbsp;
  <a href="Resetpassword.php">Reset Password</a>
  <h1>Welcome to dashboard</h1>
  <h3>hello! dear <?Php echo $user['last_name'] . " " . $user['first_name'] ?></h3>
</body>

</html>