<?php
include_once('connection.php');

if (isset($_POST["register"])) {
    if (isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['username']) and isset($_POST['date_of_birth']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['password'])) {

        //collecting form data
        $first_name = ($_POST['first_name']);
        $last_name = ($_POST['last_name']);
        $username =  ($_POST['username']);
        $date =  ($_POST['date_of_birth']);
        $phone = ($_POST['phone']);
        $password =  ($_POST['password']);
        $email = ($_POST['email']);

        //if email is a valid email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = 'invalid email format';
        }
        // mysqli_query($conn,$query)

        $query = mysqli_query($conn, "SELECT * FROM members WHERE email='$email'");

        if (mysqli_num_rows($query) > 0) {
            echo "Email already exist!";
        } else {
            mysqli_query($conn, "INSERT INTO members ((first_name,last_name,username,date_of_birth,email,phone,password)
            VALUES('$first_name','$last_name','$username','$date_of_birth','$email','$phone',md5('$password')");
        }
    }
}
?>


<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$date_of_birth = $_POST['date_of_birth'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO members(first_name,last_name,username,date_of_birth,email,phone,password)
VALUES('$first_name','$last_name','$username','$date_of_birth','$email','$phone',md5('$password'))";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('location:login.php');


?>