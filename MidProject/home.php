<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
    <body>
    	<center>
	<fieldset>
		<legend><h4>Government Science College</h4></legend>
	<table border="1">
		<tr>
			<td><a href="profile.php">Profile</a> </td>
			
		</tr>
		<tr>
			<td><a href="routine.php">View Routine</a></td>
			
		</tr>
		<tr>
			<td><a href="viewcourse.php">View courses with sections</a></td>
			
		</tr>
			<tr>
			<td><a href="viewcourse.php">Take attendence</td>
			
		</tr>
		
		<tr>
			<td><a href="UpDocument.php">Upload document</td>
		</tr>
		<tr>
			<td><a href="UpMarks.php">UpMarks</td>
		</tr>
		<tr>
			<td><a href="SendReq.php">Send request to admin</td>
		</tr>
		
		<tr>
			<td><a href="NoticeStd.php">Post notice for students</td>
		</tr>
		<tr>
			<td><a href="NoticeParent.php">Post notice for parents</td>
		</tr>
		<tr>
			<td><a href="Atten.php">Details of a specific students</td>
		</tr>
		<tr>
			<td><a href="Books.php">View Books</td>
		</tr>
		<tr>
			<td><a href="ExamSchedule.php">View exam schedule</td>
		</tr>
		<tr>
			<td><a href="poll.php">Poll</td>
		</tr>
		<tr>
			<td align="right">
			    <a href="login.php"><b>Logout</b></a>
			</td>
		</tr>
	</table>
	</fieldset>
</center>
	</form>
