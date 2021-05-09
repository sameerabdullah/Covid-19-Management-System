<!DOCTYPE html>
<html>
    <head>
        <title>Recommendations</title>
        <link href="styles.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body class="body">
        <div class="navbar">
            <p class="title">Covid-19 Management System</p>
            <div class="links">
                <a href="homepage.php">Homepage</a>
                <a href="isolation.php">Isolation Wards</a>
                <a class="active" href="update_qua.php">Quarantine Wards</a>
                <a href="patients.php">Patients Record</a>
                <a href="helpline.php">Helpline</a>
                <a href="recommendations.php">Recommendations</a>
            </div>
        </div>

        <div class="col-lg-5 m-auto">

        <form method ="post">
        <br><br>
        <div class="card">

        <div class="card-header bg-dark">

        <h1 class="text-white text-center">Quarantine ward form(Update)</h1>
        </div>
        <br>
        <!--<label class="m-auto"> Ward id: </label>
        <input type="text" name="ward_id" class="form-control m-auto"> <br> -->

        <label class="m-auto"> Capacity: </label>
        <input type="text" name="capacity" class="form-control m-auto"> <br>

        <label class="m-auto"> Manager id: </label>
        <input type="text" name="manager_id" class="form-control m-auto"> <br>

        <label class="m-auto"> Centre id: </label>
        <input type="text" name="centre_id" class="form-control m-auto"> <br>

        <button class="btn btn-success m-auto" type="submit" name="done"> Update </button>
        <br><br>
        </div>

        </form>
        <!-- <br><br>
        <div class="text-center">
            <button onclick="location.href = 'quarantine_show.php';" type="submit" name="submit" class="float-right submit-button">Return to list</button>
            </div> -->
            <br><br>
        </div>
<br><br>







            <div class="footer">
                <div class="sub">
                    <ul >
                    <li><a href="homepage.php">Homepage</a></li>
                    <li><a href="isolation.php">Isolation Wards</a></li>
                    <li><a class="active" href="update_qua.php">Quarantine Wards</a></li>
                    <li><a href="patients.php">Patients Record</a></li>
                    <li><a href="helpline.php">Helpline</a></li>
                    <li><a href="recommendations.php">Recommendations</a></li>
                    </ul>
                    </div>
                    <br><br><br>
      <p class="p">&copy; Covid-19 Management System</p>
                </div>
    </body>
</html>

<?php
include 'db_connection.php';

$conn = OpenCon();

if(isset($_POST['done']))
{
        $ward_id = $_GET['ward_id'];
        $capacity = $_POST["capacity"];
        $manager_id = $_POST["manager_id"]; 
        $centre_id = $_POST["centre_id"];

        $query = "UPDATE `quarantine_ward` SET `Ward_id`=$ward_id,`Capacity`=$capacity,`Centre_id`=$centre_id,`Manager_id`=$manager_id WHERE Ward_id=$ward_id";
        $q=mysqli_query($conn, $query);
        header('location:quarantine_show.php');
}

CloseCon($conn);
?>