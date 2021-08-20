
<?php
$insert = false;
if(isset($_POST['name'])){
    


$servername="localhost";
$username= "root";
$password= "";

//creating a connection 

$con = mysqli_connect($servername, $username, $password);

if (!$con){
// die if connection  successful 
    die("Sorry we failed to connet: " . mysqli_connect_error());
}





    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `gym`.`customer` (`Name`,`Age`, `Gender`, `Email`, `Phone Number`, `Date of Joining`, `other`) 
    VALUES 
    ('$name', '$age', '$gender', '$email', '$phone',CURRENT_TIMESTAMP(),'$desc');";


     echo $sql;




     
 
      
 


       


     // Execute the query
    if($con->query($sql) == true){
         echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}





?>