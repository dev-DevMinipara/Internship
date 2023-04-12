<html>
    <head>
        <style>
            .div-1{
             border: 100px;
            border-radius: 5px;
            background-color:aliceblue;
            text-align: center;
            position: relative;
            width: 60%;
            }
        </style>
    </head>
    <body bgcolor="#73DE8E">
	<br><br><br><br><br><br>
<center>

    <div class="div-1">
	<br><br><br>
        <h2>Delete a Task</h2>
        <form method="post">

            Sr.No.: <input type="text" name="srno"><br><br>
            <input type="submit" name="sub"><br><br><br>
        </form>
    </div>
</center>
</body>
</html>
<?php

if(isset($_POST['sub']))
{
$srno=$_POST['srno'];


$c=mysqli_connect("localhost","root","","diary");

$q="delete from task where srno=$srno";
mysqli_query($c,$q);
echo"Task Deleted Succesfully...!!";


}
?>