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
                <a href="quarantine.php">Quarantine Wards</a>
                <a class="active" href="pat_form.php">Patients Record</a>
                <a href="helpline.php">Helpline</a>
                <a href="recommendations.php">Recommendations</a>
            </div>
        </div>

        <div class="col-lg-5 m-auto">

        <form method ="post">
        <br><br>
        <div class="card">

        <div class="card-header bg-dark">

        <h1 class="text-white text-center">Patients form</h1>
        </div>
        <br>
        <label class="m-auto"> Patient id: </label>
        <input type="text" name="P_id" class="form-control m-auto"> <br>

        <label class="m-auto"> Patient Name: </label>
        <input type="text" name="Name" class="form-control m-auto"> <br>

        <label class="m-auto"> Status: </label>
        <input type="text" name="status" class="form-control m-auto"> <br>

        <label class="m-auto"> Address: </label>
        <input type="text" name="address" class="form-control m-auto"> <br>

        <label class="m-auto"> Ward ID: </label>
        <input type="text" name="ward_id" class="form-control m-auto"> <br>

        <label class="m-auto"> Manager ID: </label>
        <input type="text" name="manager_id" class="form-control m-auto"> <br>

        <label class="m-auto"> Phone no: </label>
        <input type="text" name="phone_no" class="form-control m-auto"> <br>

        <label class="m-auto"> Region ID: </label>
        <input type="text" name="region_id" class="form-control m-auto"> <br>

        <button class="btn btn-success m-auto" type="submit" name="done"> Submit </button>
        <br><br>
        </div>

        </form>
        <br><br>
        <div class="text-center">
            <button onclick="location.href = 'patient_show.php';" type="submit" name="submit" class="float-right submit-button">Return to list</button>
            </div>
            <br><br>
        </div>
<br><br>







            <div class="footer">
                <div class="sub">
                    <ul >
                    <li><a href="homepage.php">Homepage</a></li>
                    <li><a href="isolation.php">Isolation Wards</a></li>
                    <li><a href="quarantine.php">Quarantine Wards</a></li>
                    <li><a class="active" href="pat_form.php">Patients Record</a></li>
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
        $p_id = $_POST["P_id"]; 
        $name = $_POST["Name"];
        $status = $_POST["status"]; 
        $address = $_POST["address"];
        $ward_id = $_POST["ward_id"];
        $manager_id = $_POST["manager_id"];
        $phone_no = $_POST["phone_no"];
        $region_id = $_POST["region_id"];

        $query = "INSERT INTO `patient`(`P_id`, `Name`, `Status`, `Address`, `Ward_id`, `Manager_id`, `Phone_no`, `Region_id`) VALUES ('$p_id','$name','$status','$address','$ward_id','$manager_id','$phone_no','$region_id')";
        $q=mysqli_query($conn, $query);
}

CloseCon($conn);
?>