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
        <h2>Update a Task</h2>
        <form method="post">

            Sr.No.: <input type="text" name="srno"><br><br>
			New Task Name: <input type="text" name="n_task"><br><br>
            Start Date :<input type="date" name="ns_date">
            <br><br>
            End Date :<input type="date" name="ne_date"><br><br>
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
$n_task=$_POST['n_task'];
$ns_date=$_POST['ns_date'];
$ne_date=$_POST['ne_date'];

$c=mysqli_connect("localhost","root","","diary");

$q="update task set t_name='$n_task',s_date='$ns_date',e_date='$ne_date' where srno=$srno";
mysqli_query($c,$q);
echo"Task Updated Succesfully...!!";
}
?>