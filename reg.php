<?php
include('db.php');
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$class=$_POST['class'];
	
$sql= "INSERT INTO users( name, email, age, class) VALUE('$name','$email','$age','$class')";
if($conn->query($sql)){
	echo("registration successfull");
}
else{
	echo("registration failed");
}
?>
<html>
<head>
	<title>student registration</title>
</head>
<body>
	<center>
		<form action="reg.php" method="POST">
			<table>
				<tr>
					<td>NAME</td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td><input type="text" name="email" required></td>
				</tr>
				<tr>
					<td>AGE</td>
					<td><input type="text" name="age" required></td>
				</tr>
				<tr>
					<td>CLASS</td>
					<td><input type="text" name="class" required></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="register"><input type="reset" name="submit" value="reset"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
