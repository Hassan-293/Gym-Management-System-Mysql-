<?php

include 'conn.php';

$id = $_GET['delete'];


$deletequery= "DELETE FROM `trainers` WHERE `trainers`.`Trainers ID` = $id";
echo $id;



$result = mysqli_query($con, $deletequery);

echo $result;

?>