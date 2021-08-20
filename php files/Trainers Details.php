<?php

include 'fetchdata.php';
include 'links.php';

$selectquery = "select * from trainers";
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

            <li><a href="project.php"><b>Add Member</b></a></li>
            
            <li><a href="Trainers.php"><b>Add Trainer </b></a></li>

            <li><a href="#About Us"><b>About Us</b></a></li>
            
            <li><a href="#Contact Us"><b>Contact Us</b></a></li>
       
           </div>
       
       
        </ul>
        </nav>













<table  style="width:100%"> 
    <tr> 
		<th colspan="4"><h2 style="color:azure">Trainers Records</h2></th> 
		</tr style="color:azure"> 
			  <th style="color:azure"> Trainer ID </th> 
			  <th style="color:azure"> Name </th> 
			  <th style="color:azure"> Phone Number </th> 
			  <th style="color:azure"> Email </th> 
              <th style="color:azure"> Gender </th>
              <th style="color:azure"> Age </th>
              <th style="color:azure"> Address </th>
              <th style="color:azure"> Date of Joining </th>
              <th style="color:azure",colspan="2"> Operations </th>
        
        
        		  
		</tr> 
		
		<?php 

       





$selectquery = "CALL `GetTrainers`();";
        
$result = mysqli_query($con, $selectquery);





       
        while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr style="color:azure" action=Delete.php method=GET> <td><?php echo $rows['Trainers ID']; ?></td> 
        <td><?php echo $rows['Name']; ?></td> 
		<td><?php echo $rows['Phone Number']; ?></td> 
		<td><?php echo $rows['Email']; ?></td> 
		<td><?php echo $rows['Gender']; ?></td> 
        <td><?php echo $rows['Age']; ?></td> 
        <td><?php echo $rows['Address']; ?></td>
        <td><?php echo $rows['Date of Joining']; ?></td>  
        <td><a href="update.php?id=<?php echo $rows['Trainers ID'];?>" data-toggle="tooltip" data-placement="top" title="Update">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> </td>
<td><a href="Delete.php?delete=<?php echo $rows['Trainers ID'];?>" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-minus-circle" aria-hidden="true"></i> </a></td>
        
		</tr> 
	<?php 
               } 
          ?> 
  
  

	</table> 

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>



</body>
</html> 
