<?php
    include 'db_connection.php';
    $conn = OpenCon();

    $id = $_GET['P_id'];
    $q = "DELETE from patient where P_id = $id";

    mysqli_query($conn, $q);

    header('location:patient_show.php');
    CloseCon($conn);

?>
