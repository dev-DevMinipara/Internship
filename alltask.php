<html>
    <head>
        <style>
            .div-1{
             border: 100px;
            border-radius: 5px;
            background-color: aliceblue;
            text-align: center;
            position: absolute;
            left: 20%;
			width: 60%;
            }
        </style>
    </head>
    <body bgcolor="#73DE8E">
    <div class="div-1">
	<center>
        <h2>My All Tasks...</h2>
        <table width="70%;"  cellspacing="15"  style="background-color:white">
      <tr style="background-color:grey">

        <th>Sr.No.</th>
        <th>Task Name</th>
        <th>Start Date</th>
        <th>End Date</th>
      </tr>
	  
<?php

$c=mysqli_connect("localhost","root","","diary");

$v="select * from task";
$view=mysqli_query($c,$v);
while($x=mysqli_fetch_array($view)){?>

	<tr>
	<td><?php echo $x[0]."    "; ?> </td>
	<td><?php echo $x[1]."    "; ?> </td>
	<td><?php echo $x[2]."    "; ?> </td>
	<td><?php echo $x[3]."    "; ?> </td>
	</tr>
	
<?php }  ?>


		</table>
		<br><br>
		</center>
    </div>
</center>
</body>
</html>
