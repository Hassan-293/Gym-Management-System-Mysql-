<?php




$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username,$password);

if(!$con){
die("connection to this database failed due to". mysqli_connect_error());

}

echo "Succes connecting to the db";



$Member = $_POST['Member_ID'];
$Trainer = $_POST['Trainer_ID'];
$Mon = $_POST['Monday'];
$Tues = $_POST['Tuesday'];
$Wed = $_POST['Wednesday'];
$Thurs = $_POST['Thursday'];
$Fri = $_POST['Friday'];

$sql = "INSERT INTO `gym`.`workout plan of week` (`Customer ID`,`Trainer ID`, `Monday Plan`, `Tuesday Plan`, `Wednesday Plan`, `Thursday Plan`,`Friday Plan`) 
VALUES 
('$Member', '$Trainer', '$Mon', '$Tues', '$Wed','$Thurs','$Fri');";

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