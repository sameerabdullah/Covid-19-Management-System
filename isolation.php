<!DOCTYPE html>
<html>
<head>
        <title>Isolation Wards</title>
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
                <a class="active" href="isolation.php">Isolation Wards</a>
                <a href="quarantine.php">Quarantine Wards</a>
                <a href="patients.php">Patients Record</a>
                <a href="helpline.php">Helpline</a>
                <a href="recommendations.php">Recommendations</a>
            </div>
        </div>
        <br><br>
        <div class="container">
        <form class="contact-us" id="form1" name="form1" method="POST" action="">
            <div class="text-center">
            <label for='name' class="text-center">Login ID : </label>  
            <input type="login" placeholder="Login ID" name="name">
            </div>
            <br>
            <div class="text-center">
            <label for='email' >Password:</label>  
            <input type="password" placeholder="Password" name="password">
            </div>
            <br>
            <div class="text-center">
            <button type="submit" name="submit">Log In</button>
            </div>
           </form>
           </div>
           <div class="footer">
            <div class="sub">
                <ul tpye=1>
                <li><a  href="homepage.php">Homepage</a></li>
                <li><a class="active" href="isolation.php">Isolation Wards</a></li>
                <li><a href="quarantine.php">Quarantine Wards</a></li>
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

if(isset($_POST['submit']))
{
        $name = $_POST["name"]; 
        $password = $_POST["password"]; 

        $query = "SELECT manager_id, password FROM manager WHERE manager_id = '".$name."' AND  password = '".$password."'";
        $result1 = $conn->query($query);
        $query1 = "SELECT sp_id, password FROM super_manager WHERE sp_id = '".$name."' AND  password = '".$password."'";
        $result2 = $conn->query($query1);

        while($row=mysqli_fetch_assoc($result1))
        {
            $check_username=$row['manager_id'];
            $check_password=$row['password'];
        }
        while($row=mysqli_fetch_assoc($result2))
        {
            $check_username1=$row['sp_id'];
            $check_password1=$row['password'];
        }

        if($name == $check_username && $password == $check_password)
        {
            //echo "Matches.";
            header('location:isolation_show.php');
        }
        else if($name == $check_username1 && $password == $check_password1)
        {
            //echo "Matches.";
            header('location:isolation_show.php');
        }
        else
        {
            //echo "No match found.";
        }
}

CloseCon($conn);
?>