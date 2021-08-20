
<?php
include 'connect_Update.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title> Gym Management System </title>
    <link rel="stylesheet" href="style.css">
</head>
<body  style="background-image:url('gym3.jpg');">




    <div class="container" >

    <nav class="navbar">
        <ul class= "nav-list" >

  <li><a href="#Gym Management System"></a><h2 style="color: #ffffff; font-size:28px;"><b>Gym Management System</b></h2></a></li>

            <li><a href="#Members"><b>Members</b></a></li>
            
            <li><a href="#Trainers"><b>Trainers</b></a></li>

            <li><a href="#About Us"><b>About Us</b></a></li>
            
            <li><a href="#Contact Us"><b>Contact Us</b></a></li>
       
           </div>
       
       
        </ul>
        </nav>




          
<form action="connect_Update.php" method="post">
<p style="font-size: 18px;color:#ffffff;  background-color:#000000;"> Enter The Trainers Details  </p>  
<input type="text" name="trainer_name" id="name" placeholder="Enter the Trainer's Name" value= "<?php   echo $arrdata['Name']; ?>">
<input type="phone" name="trainer_phone" id="phone" placeholder="Enter the Phone Number of Trainer" value= "<?php   echo $arrdata['PhoneNumber']; ?>">
 
<input type="email" name="trainer_email" id="email" placeholder="Enter Trainers Email"  value= "<?php   echo $arrdata['Email']; ?>">
<input type="text"  name="trainer_gender" id="gender" placeholder="Enter gender of Trainer"  value= "<?php   echo $arrdata['Gender']; ?>">
<input type="text"   name="trainer_age"   id="age"   placeholder="Enter Trainer's Age" value= "<?php   echo $arrdata['Age']; ?>">
<input type="text"   name="trainer_Address" id="Address" placeholder="Enter Trainer's Address" value= "<?php   echo $arrdata['Address'];?>">

<button  class="btn"    type="submit"><b> Update </b></button>


    </form>
    </div>


    <script src="index.js"></script> 

</body>
</html>

<?php

include 'connect_trainer.php';

$showdata="select * from trainers";




if (isset($_POST['trainer_name']))

{


$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username,$password);

if(!$con){
die("connection to this database failed due to". mysqli_connect_error());

}




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