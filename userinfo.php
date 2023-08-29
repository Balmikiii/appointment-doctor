<?php
	$con = new mysqli("localhost","root","");
			if($con->connect_errno > 0){
			die('Unable to connect to database [' . $con->connect_error . ']');  } 
     
	$con->query("CREATE DATABASE IF NOT EXISTS chhaya");
	 
             mysqli_select_db($con,"chhaya");

  $balmiki="CREATE TABLE IF NOT EXISTS booking (
            id int(11) NOT NULL auto_increment,
             u_name varchar(300)NOT NULL,
             email varchar(300)NOT NULL,
             contact varchar(100)NOT NULL,
             Frome_date varchar(300)NOT NULL,
             to_date varchar(255)NOT NULL,
             total_day varchar(255)NOT NULL,
             T_time varchar(255)NOT NULL,
             PRIMARY KEY(id) )";
           $con->query($balmiki);


if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $contact = $_POST['Number'];
    $date = $_POST['Date'];
    $todate = $_POST['todate'];
    $day = $_POST['day'];
    $time = $_POST['time'];
}
$mydb = "INSERT INTO `booking` (`u_name`, `email`, `contact`, `Frome_date`, `to_date`, `total_day`, `T_time`)
VALUE('$name', '$email', '$contact', '$date', '$todate', '$day', '$time')";
 $query = mysqli_query ($con,$mydb);
echo "success";
 header('location:dashboard.html');  
 
?>