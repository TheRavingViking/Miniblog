<?php
include "connection.php";
$con = new Connection();
$con = $con->connect();



if (isset($_POST['submit'])){
    $title = $_POST ['postTitle'];
    $desc = $_POST ['postDesc'];
    $cont = $_POST ['postCont'];
    $sql = "insert into miniblog.posts values('NULL','$title','$desc', '$cont')";
    $con -> query($sql)
    echo 'record updated';
    header('refresh:5; add_post_form.php');
    } else {
    echo 'error updating record:' . $con->error;
}