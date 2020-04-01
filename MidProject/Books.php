<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
</head>
<body> 
<center>
 <table border="1" width="40%" >
		<tr>
	    <td colspan="4" align="center"><b>Welcome Sakib!</b> </center></td>
		</tr>

		<tr>
	    <td colspan="4" align="center"><b>Books</b> </center></td>
		</tr>
		
		<tr>
		<td><b>Book Name</b></td>
		<td>Author</td>
		<td>Edition</td>
		<td>Availability</td>
		</tr>

		<tr>
		<td><b>Abc</b></td>
		<td>xyz</td>
		<td>5th</td>
		<td>yes</td>
		</tr>

		<tr>
		<td><b>Def</b></td>
		<td>xyz</td>
		<td>4th</td>
		<td>yes</td>
		</tr>

		<tr>
		<td><b>Efg</b></td>
		<td>pwq</td>
		<td>10th</td>
		<td>No</td>
		</tr>
		
		<tr>
		<td colspan="4" align="center"><a href="home.php">Go home</a><br>
	                                  <a href="LOGIN.php">Logout</a></br></td>
		</tr>
		</table>
	</center>
</body>
</html>