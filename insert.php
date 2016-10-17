<?php

$db = new mysqli('localhost', 'root', '', 'les 5 php');

$name = $_POST ['naam'];
$age = $_POST ['age'];

$sql = "insert into users values('NULL','$name','$age')";

if ($db->query($sql) === true){
    echo 'record updated';
    header('refresh:5; dbconnectie.php');
    } else {
    echo 'error updating record:' . $db->error;
}