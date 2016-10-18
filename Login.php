<?php

include "connection.php";


if (isset($_POST['username'])) {
    $con = new Connection();
    $con = $con->connect();
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "select * from members where username='$user' and password='$pass' limit 1 ";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) ==1){
        $message = "Legendary!!!";
        echo $message;
        header('location: overview.php');
    } else {
        echo "Failure! wrong password or username!";
    }

}


?>

<html>
<h1>Login</h1>
<form method="post" action="login.php">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit">
</form>

<a href="register.php" >Register here</a>
</html>