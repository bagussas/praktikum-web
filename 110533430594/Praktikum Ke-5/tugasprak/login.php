<!DOCTYPE html>
<html>
	<head>
		<title> Login </title>
	</head>
	<body>
		<h6>Isikan username (nama) dan password (nim) anda</h6>
		<form name="form1" action="login_code.php" method="post">
			<table>
				<tr>
					<td>Username : </td>
					<td><input type="text" name="nama" /></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type="text" name="pass" /></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="login"></td>
				</tr>
			</table>
		</form>
	</body>
</html>