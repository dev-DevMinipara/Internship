<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        .div1{
            border :10p0x;
            text-align: center;
            background-color: white;
            position:absolute;
            left:20%;
            width:50%;
        }
    </style>
</head>
<body bgcolor="pink">
    <div class="div1">
	<table width="70%;"  cellspacing="15"  style="background-color:white">
      <tr style="background-color:grey">

        <th>ID/th>
        <th>F_NAME</th>
        <th>L_NAME</th>
      </tr>
	 
	<?php
		$c=mysqli_connect("localhost","root","","data");
		$v="select *from form";
		$view=mysqli_query($c,$v);
		while($a=mysqli_fetch_array($view)){?>
		<tr>
	<td><?php echo $a[0]."    "; ?> </td>
	<td><?php echo $a[1]."    "; ?> </td>
	<td><?php echo $a[2]."    "; ?> </td>

	</tr>
		<?php } ?>
	
	</table>

</div>  
</body>
</html>