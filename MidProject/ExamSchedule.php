<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exam Schedule</title>
</head>
<body> 
<center>
 <table border="1" width="40%" >
		<tr>
	    <td colspan="3" align="center"><b>Welcome Sakib!</b> </center></td>
		</tr>
		
		<tr>
	    <td colspan="3" align="center"><b>Exam Schedule</b> </center></td>
		</tr>
		
		<tr>
		<td><b>Day</b></td>
		<td>Time</td>
		<td>Subject</td>
		</tr>

		<tr>
		<td><b>01</b></td>
		<td>10am-1pm</td>
		<td>Bengali</td>
		</tr>
		

		<tr>
		<td><b>02</b></td>
		<td>10am-1pm</td>
		<td>English</td>
		</tr>
		
		<tr>
		<td><b>03</b></td>
		<td>10am-1pm</td>
		<td>Math</td>
		</tr>

		<tr>
		<td><b>04</b></td>
		<td>10am-1pm</td>
		<td>Biology</td>
		</tr>

		<tr>
		<td><b>05</b></td>
		<td>10am-1pm</td>
		<td>Chemistry</td>
		</tr>

         <tr>
		<td><b>06</b></td>
		<td>10am-1pm</td>
		<td>Higher Math</td>
		</tr>

		<tr>
		<td colspan="3" align="center"><a href="home.php">Go home</a><br>
	                                  <a href="LOGIN.php">Logout</a></br></td>
		</tr>
		</table>
	</center>
</body>
</html>