<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Routine</title>
</head>
<body> 
<center>
 <table border="1" width="40%" >
 <tr>
	    <td colspan="4" align="center"><b>Welcome Sakib!</b> </center></td>
		</tr>
		<tr>
	    <td colspan="4" align="center"><b>Routine</b> </center></td>
		</tr>
		<tr>
		<td><b>Day</b></td>
		<td>Time</td>
		<td>Subject</td>
		<td>Section</td>
		</tr>
		
		<tr>
		<td><b>Sat</b></td>
		<td><br>10am-11am</br>
		12pm-2pm</td>
		<td><br>Physics</br>
		Chemistry</td>
		<td><br>A</br>B</td>
		</tr>
		
		<tr>
		<td><b>Sun</b></td>
		<td><br>11am-12am</br>
		2pm-3pm</td>
		<td><br>Math</br>
		Higher math</td>
		<td><br>A</br>B</td>
		</tr>
		
		<tr>
		<td><b>Mon</b></td>
		<td><br>10am-11am</br>
		12pm-2pm</td>
		<td><br>Physics</br>
		Chemistry</td>
		<td><br>A</br>B</td>
		</tr>
		
		<tr>
		<td><b>Tue</b></td>
		<td><br>11am-12am</br>
		2pm-3pm</td>
		<td><br>Math</br>
		Higher math</td>
		<td><br>A</br>B</td>
		</tr>
		
		<tr>
		<td><b>Wed</b></td>
		<td><br>10am-11am</br>
		12pm-2pm</td>
		<td><br>Physics</br>
		Chemistry</td>
		<td><br>A</br>B</td>
		</tr>
		
		<tr>
		<td><b>Tue</b></td>
		<td><br>11am-12am</br>
		2pm-3pm</td>
		<td><br>Math</br>
		Higher math</td>
		<td><br>A</br>B</td>
		</tr>
		
		
		
		<tr>
		<td colspan="4" align="center"><a href="home.php">Go home</a><br>
	                                  <a href="LOGIN.php">Logout</a></br></td>
		</tr>
		</table>
	</center>
</body>
</html>