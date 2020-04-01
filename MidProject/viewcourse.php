<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body> 
<center>
 <table border="1" width="40%" >
 <tr>
	    <td colspan="4" align="center"><b>Welcome Sakib!</b> </center></td>
		</tr>
		<tr>
	    <td colspan="4" align="center"><b>Courses</b> </center></td>
		</tr>
		<tr>
		<td>Subject</td>
		<td>Section</td>
		</tr>
		
		<tr>
		<td><a href="Attendence.php">Physics</a></td>
		<td>A</td>
		</tr>

		<tr>
		<td>Chemistry</td>
		<td>B</td>
		</tr>

		<tr>
		<td>Math</td>
		<td>C</td>
		</tr>

		<tr>
		<td>Higher Math</td>
		<td>D</td>
		</tr>


		
		

		<tr>
		<td colspan="2" align="center"><a href="home.php">Go home</a><br>
	                                  <a href="LOGIN.php">Logout</a></br></td>
		</tr>

		
		</table>
	</center>
</body>
</html>