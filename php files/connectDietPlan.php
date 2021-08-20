<?php

$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username,$password);

if(!$con){
die("connection to this database failed due to". mysqli_connect_error());

}

echo "Succes connecting to the db";
$MemberID = $_POST['Member_ID'];
$TrainerID = $_POST['Trainer_ID'];
$Diet = $_POST['Diet'];
$Duration = $_POST['Duration'];


$sql = "INSERT INTO `gym`.`fitness diet plan` (`Member ID`,`Trainer ID`, `Fitness Diet`, `Duration`) 
VALUES 
('$MemberID', '$TrainerID', '$Diet', '$Duration');";

echo $sql;




if ($con->query($sql)==true){
    echo "Successfully Inserted ";
    $insert = true;

}
else{
    echo "ERROR:  $sql <br> $con->error";
}


$con->close();




?>
















