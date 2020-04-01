	<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notice</title>
</head>
<body>
<center>
<table  border="0" width="60%">

        <tr>

	    <td>
		<h1 align="center">Hey!</h1>
	    </td>
	    </tr>

		<tr>
		<td align="center"> <h2> Your request send</h2></td>
		</tr>

		<tr>
		<td align="center">
		<a href="SendReq.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>
