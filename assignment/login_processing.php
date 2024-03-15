<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$username = $_POST['email'];
$password = $_POST['password'];
//add some validation
include('db_connection.php');
$password = md5($password);
$select_query = "SELECT * FROM `gorkha`
WHERE `email` = '$username'
AND `password`=  '$password'";
$result = mysqli_query($conn, $select_query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row['password'];
    
    if (password_verify($password, $hashedPassword)) {
        $_SESSION['user'] = $row;
        header('location: gorkha.php');
        exit;
    } else {
        $_SESSION['msg'] = "Username and/or password incorrect!";
        header('location: login.php');
        exit;
    }
} else {
    $_SESSION['msg'] = "Username and/or password incorrect!";
    header('location: login.php');
    exit;
}
?>
