<?php
$servername="localhost";
$username="root";
$password="";
$dbname="students";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("connection failed".$conn->connect_error());
}
else{
	echo("connection successful");
	}
?>
<html>
<head>
	<title>student registration</title>
</head>
<body>
	<center>
		<form action="smaple.php" method="POST">
			<table>
				<tr>
					<td><input type="submit" name="submit" value="register"><input type="reset" name="submit" value="reset"></td>
				</tr>
			</table>
		</from>
	</center>
</body>
</html>
