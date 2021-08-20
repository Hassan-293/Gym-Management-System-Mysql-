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

            <li><a href="project.php"><b>Add Members</b></a></li>
            
            <li><a href="Trainers.php"><b>Add Trainers</b></a></li>

            <li><a href="displaydata.php"><b>Member Details</b></a></li>
            
            <li><a href="Trainers Details.php"><b>Trainer Details </b></a></li>


            <li><a href="payment.php"><b>Add Payment</b></a></li>
            
            <li><a href="#Contact Us"><b>Contact Us</b></a></li>
       
           </div>
       
       
        </ul>
        </nav>




          
    <form action="connect.php" method="post">
        <p style="font-size: 18px;color:#ffffff;  background-color:#000000;"> Enter the members Details </p>  
 <input type="text" name="name" id="name" placeholder="Enter Your Name">
 <input type="text" name="age" id="age" placeholder="Enter Your age">
 <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
 <input type="email" name="email" id="email" placeholder="Enter Your Email">
 <input type="phone" name="phone" id="phone" placeholder="Enter Your PhoneNumber">
 <textarea name="desc" id="desc" cols="30" rows="6" placeholder="Enter any type of your Description">
</textarea>
<button  class="btn"    type="submit"><b> Submit </b></button>


    </form>
    </div>


    <script src="index.js"></script> 

</body>
</html>