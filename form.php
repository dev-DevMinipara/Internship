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
    <form method="post">
        <br><br>
        Enroolment no. :<input type="text" name="s_id"><br><br>
        First Name :<input type="text" name="f_name"><br><br>
        Last Name :<input type="text" name="l_name"><br><br>
        <input type="submit" name="sub">
		<input type="button" value="data" name="data" onclick="window.open('form1.php')"><br><br>
        <br><br>
</form>
</div>  
</body>
</html>
<?php
if(isset($_POST['sub']))
{
$s_id=$_POST['s_id'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];

$c=mysqli_connect("localhost","root","","data");
$sql="INSERT INTO `form`(`s_id`,`f_name`,`l_name`) VALUES ('$s_id','$f_name','$l_name')";
mysqli_query($c,$sql);
echo"data inserted succesfully...";
}
?>