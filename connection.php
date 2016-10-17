<?php
class Connection
{
    /**
     * @return mysqli
     */
    function connect ()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "miniblog";
        $port = "3306";

        $conn = new mysqli($servername, $username, $password, $dbName, $port);

        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>