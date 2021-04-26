<?php
include_once('connection.php');

$course_id = $course['Id'];
if (isset($_POST['update'])) {
    if (isset($_POST['full_name']) and isset($_POST['course_Enrol'])) {
        $full_name = $_POST['full_name'];
        $course_Enrol = $_POST['course_Enrol'];
        

        $query = "UPDATE my_course SET full_name='$full_name', course_Enrol='$course_Enrol' WHERE Id='$course_id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            echo '<script type="text/javascript"> alert("data updated"); </script>';
        }
    }
}


