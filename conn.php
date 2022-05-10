<?php

error_reporting(0);

$user = "root";
$pass = "";
$host = "localhost";
$db_name = "100ugik-phpmysql";

$conn = new mysqli($host, $user, $pass, $db_name);
if ($conn->connect_errno) die("Mysql connection error: " . $conn->connect_error);