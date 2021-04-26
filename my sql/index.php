<?php
?>

<!DOCTYPE html>
<html>
<body>
<h1> <span> Register here </span></h1>
<form action = "insertion.php"  method="POST">
  First_name: <input type= "text" name = "first_name"placeholder = "first_name" require="">
  <br>
  <br>
  last_name: <input type= "text" name = "last_name" placeholder = "last_name" required="">
  <br>
  <br>
  username:  <input type= "text" name = "username" placeholder = "username" required="">
  <br>
  <br>
  date_of_birth: <input type= "date" name = "date_of_birth" placeholder = "date_of_birth" required="">
  <br>
  <br>
  Email: <input type= "email" name = "email" placeholder = "email_address" required="">
  <br>
  <br>
  phone: <input type= "number" name = "phone" placeholder = "phone_number" required="">
  <br>
  <br>
  password: <input type = "password" name ="password" placeholder ="password" required="">
      <br>
      <br>
 Submit: <input type= "submit" name = "register" placeholder = "Submit_here"> 
</form>
<br>
<br>
<p> already have an account?<a href="Login.php"> login here </a></p>

</body>

</html>