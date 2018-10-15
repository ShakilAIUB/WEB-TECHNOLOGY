<?php?>

<html>
	<head>
		<title>Insert Menu</title>
		<style>
			
		</style>
	</head>
	<body>
	
		
	
	
	<table border=1 align=center width=500px height=400px>
	 <tr align=center> <td><h1>Insert Menu</h1>
	     <p align=right><a href="read.php">View</a></p>
	 </td></tr>
		</br></br></br></br>
		<form action="write.php" method="post"><tr align=center>
			<td>Menu: <input type="text" name="mn"></td></tr>
			<tr align=center>
			<td>Item: <input type="text" name="itm"></td></tr>
			<tr align=center><td>Price: <input type="text" name="prc"></td></tr>
			<tr align=right><td ><input type="submit" name="ok" value="submit"></td></tr>
		</form>
		
		</table>
	</body>


</html>