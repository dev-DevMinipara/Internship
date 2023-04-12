<html>
    <head>
        <style>
            .div-1{
            border: 100px;
            border-radius: 5px;
            background-color: aliceblue;
            text-align: center;
			left: 20%;
            width: 60%;
            }
        </style>
    </head>
    <body bgcolor="#73DE8E">
	<br><br><br><br><br><br>
<center>

    <div class="div-1">
	<br>
        <h2>My Diary...</h2>
	<br>
        <form method="post">

        <input type=submit value="Insert Task" name="submit" onclick="window.open('insert.php')" >	
		<br><br>
		<input type="button" value="Update Task" name="update" onclick="window.open('update.php')" >
		<br><br>
		<input type="button" value="Delete Task" name="d_task" onclick="window.open('delete.php')" >
		<br><br>
		<input type="button" value="All Task" name="a_task" onclick="window.open('alltask.php')" >
		<br><br><br>
       	</form>
    </div>
</center>
</body>
</html>

