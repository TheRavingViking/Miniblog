<?php

print_r($_POST);

if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];

if($user->login($username,$password)){

//logged in return to index page
header('Location: index.php');
exit;


} else {
$message = '<h1>Wrong username or password</h1>';
}

?>
