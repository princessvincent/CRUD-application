<?php
session_start();
//if you are not logged in, go back to login page
if (!isset($_SESSION["logged_user"])) {
    header("location: Login.php");
}

?>
<!DOCTYPE html>
<html>

<head>

<body>
    <div>
        <h1>Course Creation</h1>
        <a href="dashboard.php">goto dashboard</a><br><br><br>
        <form action="CRUD_Insert.php" method="POST">
            fullname: <input type="text" name="full_name" placeholder="full_name" required="">
            <br>
            <br>
            course_Enrol: <input type="text" name="course_Enrol" placeholder="choose_course" required="">
            <br>
            <br>

            <button type="submit" name="Insert" class="btn btn_default">Create course</button>
        </form>
    </div>
</body>
</head>

</html>