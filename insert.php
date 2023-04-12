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
	<br><br><br><br><br><br>
<center>
    <div class="div-1">
        <h2>Insert a New Task</h2>
        <form method="post">

            Task name: <input type="text" name="task"><br><br>
            Start Date :<input type="date" name="s_date">
<br><br>
End Date :<input type="date" name="e_date">
<br><br>
            <input type="submit" name="sub">
            

        </form>
    </div>
</center>
</body>
</html>
<?php

if(isset($_POST['sub']))
{
$task=$_POST['task'];
$s_date=$_POST['s_date'];
$e_date=$_POST['e_date'];

$c=mysqli_connect("localhost","root","","diary");

$sql= "INSERT INTO `task`(`t_name`,`s_date`,`e_date`) VALUES ('$task','$s_date','$e_date')";
mysqli_query($c,$sql);
echo"Task Added Succesfullly....";

}

?>