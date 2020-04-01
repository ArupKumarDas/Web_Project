<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>poll</title>
</head>
<body>
<center>
<table  border="1" width="40%">

       <tr align="center">

	   <td>
		<h1 align="center"> Welcome! </h1>

		<b>From:</b> AIUB
		<br>
		<b>Subject:</b>Participate in the poll
		<br>
		Faculty members must needed M.S.C degree.
		<br>
		Do you recommanded it?
		
		<br>
            <b> Yes<b><br>
			<b>No<b>
		<br>
		<a href="home.php">Go home</a>
		<br>
		<a href="LOGIN.php">Logout</a>
		</td>
		</tr>    <br>
	
	   </table>
	</center>
</body>
</html>