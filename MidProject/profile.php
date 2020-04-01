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
	    <td colspan="2" align="center"><b>Welcome Sakib!</b> </center></td>
		</tr>
		
		<tr>
	    <td colspan="2" align="center"><img src="Sakib.jpg" height="180px" width="140px"/> </td>
	    </tr>
		<tr>
		<td><b>Id</b></td>
		<td>14-25020-2</td>
		</tr>
		<tr>
		<td><b>Name</b></td>
		<td>Sakib Al Hasan</td>
		</tr>
		<tr>
		<td><b>Gender</b></td>
		<td>Male</td>
		</tr>
		<tr>
		<td><b>DOB</b></td>
		<td>29.10.1994</td>
		</tr>
		<tr>
		<td><b>Place of Birth</b></td>
		<td>Comilla</td>
		</tr>
		<tr>
		<td><b>Address</b></td>
		<td>Dhaka</td>
		</tr>
		<tr>
		<td><b>Phone</b></td>
		<td>01718525255</td>
		</tr>
		<tr>
		<td><b>Email</b></td>
		<td>sakib001@gmail.com</td>
		</tr>
		<tr>
		<td><b>Degree</b></td>
		<td>Msc in Applied Chemistry</td>
		</tr>
		<tr>
		<td><b>Occupation</b></td>
		<td>Teacher</td>
		</tr>
		<tr>
		<td><b>Married</b></td>
		<td>Yes</td>
		</tr>
		
		<tr>
		<td colspan="2" align="center"><a href="home.php">Go home</a><br>
	                                  <a href="LOGIN.php">Logout</a></br></td>
		</tr>
		</table>
	</center>
</body>
</html>