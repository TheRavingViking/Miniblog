<?php

if(!$_SESSION['isAdmin']){
    header('Location: overview.php');
    exit();
}
?>