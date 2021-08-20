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

            <li><a href="#Payment"><b>Payment</b></a></li>

            <li><a href="#Workout Plan"><b>Workout Plan</b></a></li>

            <li><a href="#About Us"><b>About Us</b></a></li>
            
            <li><a href="#Contact Us"><b>Contact Us</b></a></li>
       
           </div>
       
       
        </ul>
        </nav>




          
<form action="connect_workout.php" method="post">
<p style="font-size: 18px;color:#ffffff;  background-color:#000000;"> Enter the Workout Plan Details  </p>  
<input type="number" name="Member_ID" id="Member ID" placeholder=" Enter Members ID ">
<input type="number" name="Trainer_ID" id="Trainer ID" placeholder="Enter Trainer ID">
 

<input type="text"  name="Monday" id="month" placeholder="Monday Plan">

<input type="text"  name="Tuesday" id="month" placeholder="Tuesday Plan">


<input type="text"  name="Wednesday" id="month" placeholder="Wednesday Plan">

<input type="text"  name="Thursday" id="month" placeholder="Thursday Plan">

<input type="text"  name="Friday" id="month" placeholder="Friday Plan">

<button  class="btn"    type="submit"><b> Submit </b></button>


    </form>
    </div>


    <script src="index.js"></script> 

</body>
</html>