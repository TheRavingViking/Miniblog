<?php

$db = new mysqli('localhost', 'root', '', 'les 5 php');
if ($db->connect_errno > 0) {

    echo "Error: " . $db->connect_error . "\n";

}else {
    //echo 'legendary!';
}

//$sql = "select * from users";
//
//if (!$result = $db->query($sql)){
//    die ('there was an error runnning the query [' . $db->error . ']');
//} else {
//while($row = $result->fetch_assoc()) {
//    echo $row['name'] . ' (' . $row['age'] . ')<br/>';
//}
//}
?>

<html>

<form method="post" action="insert.php">

    <input type="text" name="naam" placeholder="naam">
    <input type="text" name="age" placeholder="age">
    <input type="submit">


</form>





</html>

