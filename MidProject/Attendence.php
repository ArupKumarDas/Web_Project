<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Attendence</title>
</head>
<body> 
<center>
 <table border="1" width="40%" >
	
		
		<tr>
		<td><b>Student Name</b></td>
		<td>Student Id</td>
		<td colspan="10" align="center"><b>Days</b> </center></td>
		</tr>

		<tr>
		<td><b><a href="Attendence.php">Rakib</a></b></td>
		<td>17346242</td>
		<td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td>
		</tr>

		<tr>
		<td><b>Akib</b></td>
		<td>17346350</td>
		<td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td>
		</tr>
		
		<tr>
		<td colspan="13" align="center"><a href="home.php">Go home</a><br>
	                                  <a href="LOGIN.php">Logout</a></br></td>
		</tr>
		</table>
	</center>
</body>
</html>