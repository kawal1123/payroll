<?php
include "db.php";
$oldPassword = $_POST['oldPassword'];
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$qry = "SELECT * FROM `staffinfo` WHERE `password` = '$oldPassword' AND `username` = '$username'";
$res = mysqli_query($connection,$qry);
if(mysqli_num_rows($res) == 0)
{
    echo "false";
    exit();
}
$qry = "UPDATE `staffinfo` SET `username` = '$username', `password` = '$password' WHERE `staffinfo`.`name` = '$name'";
$res = mysqli_query($connection,$qry);
?>