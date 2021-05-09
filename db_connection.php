<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "db_project";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connection failed: %s\n". $conn->error);
    return $conn;

}
function CloseCon($conn)
{
    $conn->close();
}
?>