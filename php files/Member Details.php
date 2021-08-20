<?php

include 'fetchdata.php';
$selectquery = "select * from customer";
$result = mysqli_query($con, $selectquery);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
        table {
          border-style: ridge;
          border-width: 1px;
          border-color: #ffffff;
          
        }
        th {
          border: 1px solid #095484;
        }
        td {
          border: 1px groove #1c87c9;
        }
      </style>




</head>
<body style="background-image:url('gym3.jpg');" >





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













<table  style="width:100%"> 
    <tr> 
		<th colspan="4"><h2 style="color:azure">Member Records</h2></th> 
		</tr> 
			  <th style="color:azure"> Sno. </th> 
			  <th style="color:azure"> Name </th> 
			  <th style="color:azure"> Age </th> 
			  <th style="color:azure"> Gender </th> 
              <th style="color:azure"> Email </th>
              <th style="color:azure"> Phone Number </th>
              <th style="color:azure"> Date of Joining </th>
              <th style="color:azure"> other </th>
        
        
        		  
		</tr> 
		
		<?php 
        $selectquery = "CALL `GetMembers`();";
        $result = mysqli_query($con, $selectquery);
        while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr style="color:azure"> <td><?php echo $rows['Sno.']; ?></td> 
        <td><?php echo $rows['Name']; ?></td> 
		<td><?php echo $rows['Age']; ?></td> 
		<td><?php echo $rows['Gender']; ?></td> 
		<td><?php echo $rows['Email']; ?></td> 
        <td><?php echo $rows['Phone Number']; ?></td> 
        <td><?php echo $rows['Date of Joining']; ?></td>
        <td><?php echo $rows['other']; ?></td>  
		</tr> 
	<?php 
               } 
          ?> 
    
	</table> 



</body>
</html> 
