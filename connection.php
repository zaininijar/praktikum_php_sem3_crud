<?php
$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "db_crud";

$conn = mysqli_connect($host, $db_username, $db_password, $db_name);

if (!$conn) {
    echo "database not connected";
}
