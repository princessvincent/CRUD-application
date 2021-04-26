<?php
session_start();
include_once('connection.php');

$user = "";
if (isset($_SESSION["logged_user"])) {
    $user = $_SESSION["logged_user"];
}


//if you are not logged in, go back to login page
if (!isset($_SESSION["logged_user"])) {
    header("location: Login.php");
}

if (isset($_GET['do']) && $_GET['do'] == "delete") {
    $id = $_GET['id'];
    $query2 = "DELETE FROM my_course WHERE Id='$id'";
    $query_run2 = mysqli_query($conn, $query2);
}

?>
<!DOCTYPE html>
<html>

<head>

<body>
    <h1>All Courses</h1>

    <a href="dashboard.php">goto dashboard</a><br><br><br>

    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>Id</th>
                <th>full_name</th>
                <th>course_Enrol</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $user_id = $user["id"];
            $sql = "SELECT * FROM my_course WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            $count = 1;
            if ($resultcheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $count;
                    echo "</td>";
                    echo "<td>";
                    echo $row['full_name'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['course_Enrol'];
                    echo "</td>";
            ?>
                    <td>
                        <a href="CRUD_Update_Form.php?course=<?php echo base64_encode(serialize((object)$row)) ?>">edit</a>
                    </td>
                    <td>
                        <a href="?do=delete&id=<?php echo $row['Id'] ?>">Delete</a>
                    </td>
            <?php

                    echo "</tr>";
                    $count++;
                }
            }

            ?>
        </tbody>
    </table>
</body>
</head>

</html>