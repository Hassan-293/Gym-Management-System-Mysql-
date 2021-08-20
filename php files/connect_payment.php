<?php




$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username,$password);

if(!$con){
die("connection to this database failed due to". mysqli_connect_error());

}

echo "Success connecting to the db";

$MemberID = $_POST['Member_ID'];
$TrainerID = $_POST['Trainer_ID'];
$Amount = $_POST['Amount'];
$Month = $_POST['month'];


$sql = "INSERT INTO `gym`.`payment` (`Customer ID`,`Trainer ID`, `Amount`, `Month`) 
VALUES 
('$MemberID', '$TrainerID', '$Amount', '$Month');";

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