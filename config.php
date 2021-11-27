<?php

error_reporting(0);

$server = "localhost";
$user = "root";
$pass = "";
$database = "lan";

$conn = mysqli_connect($server, $user , $pass , $database);

if (!$conn) {
    die("<script>alert('錯誤:资料读取失败')</script>");
}

?>