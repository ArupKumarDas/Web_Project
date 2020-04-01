<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Marks</title>
</head>
<body> 
<center>
 <table border="1" width="40%" >
 <tr>
	    <td colspan="5" align="center"><b>Welcome Sakib!</b> </center></td>
		</tr>
		<tr>
	    <td colspan="5" align="center"><b>Upload Marks</b> </center></td>
		</tr>
		<tr>
		<td><b>Student ID</b></td>
		<td>Student Name</td>
		<td>Mid Marks</td>
		<td>Final Marks</td>
		<td>Total Marks</td>
		</tr>

		<tr>
		<td><b>17346242</b></td>
		<td>Rakib</td>
		<td>50</td>
		<td>50</td>
		<td>50</td>
		</tr>

		<tr>
		<td><b>17346350</b></td>
		<td>Akib</td>
		<td>80</td>
		<td>90</td>
		<td>80</td>
		</tr>
		
		
		
		
		
		<tr>
		<td colspan="5" align="center"><a href="home.php">Go home</a><br>
	                                  <a href="LOGIN.php">Logout</a></br></td>
		</tr>
		</table>
	</center>
</body>
</html>