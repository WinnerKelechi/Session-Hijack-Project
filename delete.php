<?php

session_start();
include ('db_connect.inc.php');
    $u = $_SESSION['username'];
    //$uid = $_SESSION['loginid'];

$get = $_GET['ID'];
$conn->query("delete from comment where ID = '$get'");
header('location:comment.php');





?>
