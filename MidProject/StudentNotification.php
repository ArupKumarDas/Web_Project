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
		<h2 align="center">Group Info</h2>
	    </td>
	    </tr>

		<tr>
		<td align="center"> <h5>Dear Students, Please fill up the following google form: https://forms.gle/3NyTpsfN843bvTuc8 Thank you.</h5></td>
		</tr>

		<tr>
		<td align="center">
		<a href="NoticeStd.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>
