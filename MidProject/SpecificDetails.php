<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>student information</title>
</head>
<body> 
<center>
 <table border="1" width="40%" >
		 <tr>
	    <th colspan="1" align="center"> <h1>RAKIB</h2></th>
	    <td rowspan="1" align="center"><img src="Sakib.jpg" height="230px" width="210px"/> </td>
	    </tr>
		<tr>
		<td><b>Student ID :</b></td>
		<td>17346242</td>
		</tr>
		<tr>
		<td><b>Father Name :</b></td>
		<td>MD.KHALILUR RAHMAN</td>
		</tr>
		<tr>
		<td><b>Mother Name :</b></td>
		<td>SURAIYA SULTANA</td>
		</tr>
		<tr>
		<td><b>Present Address:</b></td>
		<td>Kuril,Kuratuli</td>
		</tr>
		<tr>
		<td><b>Permanent Address:</b></td>
		<td>khulna</td>
		</tr>
		<tr>
		<td><b>Verified Contact :</b></td>
		<td>01712083236</td>
		</tr>
		<tr>
		<td><b>Verified Email:</b></td>
		<td>atikfoysal001@gmail.com</td>
		</tr>
		<tr>
		<td><b>DOB :</b></td>
		<td>12/22/1998</td>
		</tr>
		<tr>
		<td><b>Sex :</b></td>
		<td>Male</td>
		</tr>
		<tr>
		<td><b>Nationality :</b></td>
		<td>Bangladesh</td>
		</tr>
		<tr>
		<td><b>Religion :</b></td>
		<td>Islam</td>
		</tr>
		<tr>
		<td><b>Marital Status :</b></td>
		<td>Single</td>
		</tr>
		<tr>
		<td><b>Blood Group :</b></td>
		<td>ABpos</td>
		</tr>
		<tr>
		<td><b>Admission Date :</b></td>
		<td>02-Apr-2014</td>
		</tr>
		<tr>
		<td colspan="2" align="center"><a href="home.php">Go home</a><br>
		<a href="login.php"><b>Logout</b></a>

		</tr>
		</table>
	</center>
</body>
</html>