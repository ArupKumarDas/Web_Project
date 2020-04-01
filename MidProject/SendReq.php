<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send Request</title>
</head>
<body>
<center>
<table  border="0" width="60%">

        <tr>

	    <td>
		<h1 align="center">Request To Admin!</h1>
	    </td>
	    </tr>

		<tr>
		<td colspan="2" align="center"><a href="notification.php">Update Account</a></td>
		</tr>

		<tr>
		<td colspan="2" align="center"><a href="notification.php">Delete Account</a></td>
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