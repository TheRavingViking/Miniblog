<?php

include "connection.php";

session_start();


if (isset($_POST['username'])) {
    $con = new Connection();
    $con = $con->connect();
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $salt = "zout";
    $pass = md5($salt.$pass);

    $sql = "select * from members where username='$user' and password='$pass' limit 1 ";
    $result = mysqli_query($con, $sql);
    $rows = mysqli_num_rows($result);
    $id = $result->fetch_assoc();
    $_SESSION['username'] = $id['username'];
    $_SESSION['user_id'] = $id['user_id'];
    if($rows[0]['isAdmin']==1){
        $_SESSION['isAdmin']=true;
    }else{$_SESSION['isAdmin']=false;}

    if ($rows == 1) {
        $message = "Legendary!!!";
        echo $message;
        header('location: overview.php');
    } else {
        echo "Failure! wrong password or username!";
        header('location: login.php');
    }

}


?>