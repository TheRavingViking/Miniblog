<?php
session_start();
include('Connection.php');

$user_check = $_SESSION['login_user'];
$con= new Connection();
$con=$con->connect();
$ses_sql = mysqli_query($con,"select username from user where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['email'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}
?>