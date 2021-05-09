<?php
    include 'db_connection.php';
    $conn = OpenCon();

    $id = $_GET['ward_id'];

    $q = "DELETE from isolation_ward where ward_id = $id";

    mysqli_query($conn, $q);

    header('location:isolation_show.php');
    CloseCon($conn);

?>
