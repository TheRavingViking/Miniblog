<?php

$db = new mysqli('localhost', 'root', '', 'mioniblog');
if ($db->connect_errno > 0) {

    echo "Error: " . $db->connect_error . "\n";
}

?>

