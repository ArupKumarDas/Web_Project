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
		<h2 align="center">PTM</h2>
	    </td>
	    </tr>

		<tr>
		<td align="center"> <h5>Respected gurdians, We arrange a parents teachers general meeting on thursday. So please come & join us at 4pm. Thank you.</h5></td>
		</tr>

		<tr>
		<td align="center">
		<a href="NoticeParent.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>
