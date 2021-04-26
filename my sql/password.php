<?php
session_start();
include_once('connection.php');
$members="";
if(isset($_SESSION['LOGGED_USER'])){
    $members = (object)$_SESSION['logged_user'];
}

$sql = "UPDATE members SET password = md5(password) WHERE Id ='$members->Id";
