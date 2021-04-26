<?php
session_start();

$user = "";
if (isset($_SESSION["logged_user"])) {
  $user = $_SESSION["logged_user"];
}

include_once('connection.php');
if (isset($_POST['Insert'])) {
  if (isset($_POST['full_name']) and isset($_POST['course_Enrol'])) {

    $full_name = $_POST['full_name'];
    $course_Enrol = $_POST['course_Enrol'];
    $user_id = $user['id'];

    $sql = "INSERT INTO my_course (full_name,course_Enrol, user_id) VALUES('$full_name','$course_Enrol', '$user_id')";

    if ($conn->query($sql) === TRUE) {
      echo 'New record created successfully <a href="dashboard.php">goto dashboard</a>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  //  header("location:CRUD_index.php");
}
