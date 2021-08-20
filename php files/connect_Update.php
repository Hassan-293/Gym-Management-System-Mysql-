<?php

if (isset($_POST['trainer_name']))

{


$server="localhost";
$username="root";

$password="";

$con=mysqli_connect($server, $username,$password);

if(!$con){
die("connection to this database failed due to". mysqli_connect_error());

}













$NAMES=$_GET['trainer_name'];

$showquery="select * from trainers where trainer_name={$NAMES}";


$showsdata=mysqli_query($con, $showquery);

$arrdata= mysqli_fetch_array($showsdata);






$name = $_POST['trainer_name'];
$phone = $_POST['trainer_phone'];
$email = $_POST['trainer_email'];
$gender = $_POST['trainer_gender'];
$age = $_POST['trainer_age'];
$address = $_POST['trainer_Address'];


$sql = "INSERT INTO `gym`.`trainers` (`Name`,`Phone Number`, `Email`, `Gender`, `Age`, `Address`,`Date of Joining`) 
VALUES 
('$name', '$phone', '$email', '$gender', '$age','$address',CURRENT_TIMESTAMP());";

echo $sql;

if ($con->query($sql)==true){
    echo "Successfully Inserted ";
    $insert = true;

}
else{
    echo "ERROR:  $sql <br> $con->error";
}
$con->close();
   
}





?>