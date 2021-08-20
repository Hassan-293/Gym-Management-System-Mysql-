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




          
<form action="connect_trainer.php" method="post">
<p style="font-size: 18px;color:#ffffff;  background-color:#000000;"> Enter The Trainers Details  </p>  
<input type="text" name="trainer_name" id="name" placeholder="Enter the Trainer's Name">
<input type="phone" name="trainer_phone" id="phone" placeholder="Enter the Phone Number of Trainer">
 
<input type="email" name="trainer_email" id="email" placeholder="Enter Trainers Email">
<input type="text"  name="trainer_gender" id="gender" placeholder="Enter gender of Trainer">
<input type="text"   name="trainer_age"   id="age"   placeholder="Enter Trainer's Age">
<input type="text"   name="trainer_Address" id="Address" placeholder="Enter Trainer's Address">

<button  class="btn"    type="submit"><b> Submit </b></button>


    </form>
    </div>


    <script src="index.js"></script> 

</body>
</html>