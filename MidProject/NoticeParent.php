<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notice for parents</title>
</head>
<body>
<center>
<table  border="0" width="60%">

        <tr>

	    <td>
		<h1 align="center">NOTICE FOR PARENTS!</h1>
	    </td>
	    </tr>

		<tr>
		<td colspan="2" align="center"><a href="ParentNotification.php">Update Notice</a></td>
		</tr>

		<tr>
		<td align="center">
		<a href="home.php">Go home</a><br>
		<a href="login.php"><b>Logout</b></a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>