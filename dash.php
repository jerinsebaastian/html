<?php
include('db.php');	
$sql=SELECT *FROM user
$result=$conn->query($sql);
$user=$result->fetch_assoc();
?>
<html>
<head>
	<title>student details</title>
</head>
<body>
	<center>
		<form action="reg.php" method="POST">
			<table>
				<tr>
					<td>NAME</td>
					<td><?php echo("$user['name']")?></td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td><?php echo("$user['email']")?></td>
				</tr>
				<tr>
					<td>AGE</td>
					<td><?php echo("$user['age']")?></td>
				</tr>
				<tr>
					<td>CLASS</td>
					<td><?php echo("$user['class']")?></td>
				</tr>
			</table>
		</from>
	</center>
</body>
</html>
