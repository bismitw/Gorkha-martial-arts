<?php 
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $db_host = 'localhost:3307';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'abc_db'; 
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
?>