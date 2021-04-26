<?php
session_start();
//if you are not logged in, go back to login page
if (!isset($_SESSION["logged_user"])) {
    header("location: Login.php");
}
// get current selected course
if (isset($_GET['course'])) {

    $course = (array) unserialize(base64_decode($_GET["course"]));
}

include_once('CRUD_update.php');

?>
<!DOCTYPE html>
<html>

<head>

<body>
    <div>
    <h1>Course Modification</h1>
    <a href="dashboard.php">goto dashboard</a><br><br><br>
        <form action="" method="POST">
            fullname: <input type="text" name="full_name" value="<?php echo $course['full_name']?>" placeholder="full_name" required="">
            <br>
            <br>
            course_Enrol: <input type="text" value="<?php echo $course['course_Enrol']?>" name="course_Enrol" placeholder="choose_course" required="">
            <br>
            <br>
            <button type="submit" name="update" class="btn btn_default">update course</button>
        </form>
    </div>
</body>
</head>

</html>