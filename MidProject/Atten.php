
<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Atten</title>
</head>
<body> 
<center>
 <table border="1" width="40%" >
	
		
		<tr>
		<td><b>Student Name</b></td>
		<td>Student Id</td>
		</tr>

		<tr>
		<td><b><a href="SpecificDetails.php">Rakib</a></b></td>
		<td>17346242</td>
		</tr>

		<tr>
		<td><b>Akib</b></td>
		<td>17346350</td>
		</tr>
		
		<tr>
		<td colspan="2" align="center"><a href="home.php">Go home</a><br>
	                                  <a href="LOGIN.php">Logout</a></br></td>
		</tr>
		</table>
	</center>
</body>
</html>