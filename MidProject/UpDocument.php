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
	    <td colspan="4" align="center"><b>Document Upload</b> </center></td>
		</tr>
		<tr>
		<td>Subject</td>
		<td>Section</td>
		<td>Choose File</td>
		<td>Submit</td>


		</tr>
		<tr>
			
			
		<tr>
		<td>Physics</td>
		<td>A</td>
		<td>
		<input type="file">
		</td>
		<td>
		<input type="submit" name="" value="Submit">
		</td>
		</tr>

		<tr>
		<td>Chemistry</td>
		<td>B</td>
		<td>
		<input type="file">
		</td>
		<td>
		<input type="submit" name="" value="Submit">
		</td>
		</tr>

		<tr>
		<td>Math</td>
		<td>C</td>
		<td>
		<input type="file">
		</td>
		<td>
		<input type="submit" name="" value="Submit">
		</td>
		</tr>

		<tr>
		<td>Higher Math</td>
		<td>D</td>
		<td>
		<input type="file">
		</td>
		<td>
		<input type="submit" name="" value="Submit">
		</td>
		</tr>


		
		

		<tr>
		<td colspan="4" align="center"><a href="home.php">Go home</a><br>
	                                  <a href="LOGIN.php">Logout</a></br></td>
		</tr>

		
		</table>
	</center>
</body>
</html>