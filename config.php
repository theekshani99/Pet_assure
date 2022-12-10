<?php
$sever = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "accounts";

if (!$con = mysqli_connect($sever,$db_username ,$db_password , $db_name)) {

    die("Failed to connect to the database!");
}
?>